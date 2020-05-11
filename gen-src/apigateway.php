<?hh // strict
namespace slack\aws\apigateway;

interface ApiGatewayV2 {
  public function CreateApi(CreateApiRequest): Awaitable<Errors\Result<CreateApiResponse>>;
  public function CreateApiMapping(CreateApiMappingRequest): Awaitable<Errors\Result<CreateApiMappingResponse>>;
  public function CreateAuthorizer(CreateAuthorizerRequest): Awaitable<Errors\Result<CreateAuthorizerResponse>>;
  public function CreateDeployment(CreateDeploymentRequest): Awaitable<Errors\Result<CreateDeploymentResponse>>;
  public function CreateDomainName(CreateDomainNameRequest): Awaitable<Errors\Result<CreateDomainNameResponse>>;
  public function CreateIntegration(CreateIntegrationRequest): Awaitable<Errors\Result<CreateIntegrationResult>>;
  public function CreateIntegrationResponse(CreateIntegrationResponseRequest): Awaitable<Errors\Result<CreateIntegrationResponseResponse>>;
  public function CreateModel(CreateModelRequest): Awaitable<Errors\Result<CreateModelResponse>>;
  public function CreateRoute(CreateRouteRequest): Awaitable<Errors\Result<CreateRouteResult>>;
  public function CreateRouteResponse(CreateRouteResponseRequest): Awaitable<Errors\Result<CreateRouteResponseResponse>>;
  public function CreateStage(CreateStageRequest): Awaitable<Errors\Result<CreateStageResponse>>;
  public function CreateVpcLink(CreateVpcLinkRequest): Awaitable<Errors\Result<CreateVpcLinkResponse>>;
  public function DeleteAccessLogSettings(DeleteAccessLogSettingsRequest): Awaitable<Errors\Error>;
  public function DeleteApi(DeleteApiRequest): Awaitable<Errors\Error>;
  public function DeleteApiMapping(DeleteApiMappingRequest): Awaitable<Errors\Error>;
  public function DeleteAuthorizer(DeleteAuthorizerRequest): Awaitable<Errors\Error>;
  public function DeleteCorsConfiguration(DeleteCorsConfigurationRequest): Awaitable<Errors\Error>;
  public function DeleteDeployment(DeleteDeploymentRequest): Awaitable<Errors\Error>;
  public function DeleteDomainName(DeleteDomainNameRequest): Awaitable<Errors\Error>;
  public function DeleteIntegration(DeleteIntegrationRequest): Awaitable<Errors\Error>;
  public function DeleteIntegrationResponse(DeleteIntegrationResponseRequest): Awaitable<Errors\Error>;
  public function DeleteModel(DeleteModelRequest): Awaitable<Errors\Error>;
  public function DeleteRoute(DeleteRouteRequest): Awaitable<Errors\Error>;
  public function DeleteRouteRequestParameter(DeleteRouteRequestParameterRequest): Awaitable<Errors\Error>;
  public function DeleteRouteResponse(DeleteRouteResponseRequest): Awaitable<Errors\Error>;
  public function DeleteRouteSettings(DeleteRouteSettingsRequest): Awaitable<Errors\Error>;
  public function DeleteStage(DeleteStageRequest): Awaitable<Errors\Error>;
  public function DeleteVpcLink(DeleteVpcLinkRequest): Awaitable<Errors\Result<DeleteVpcLinkResponse>>;
  public function ExportApi(ExportApiRequest): Awaitable<Errors\Result<ExportApiResponse>>;
  public function GetApi(GetApiRequest): Awaitable<Errors\Result<GetApiResponse>>;
  public function GetApiMapping(GetApiMappingRequest): Awaitable<Errors\Result<GetApiMappingResponse>>;
  public function GetApiMappings(GetApiMappingsRequest): Awaitable<Errors\Result<GetApiMappingsResponse>>;
  public function GetApis(GetApisRequest): Awaitable<Errors\Result<GetApisResponse>>;
  public function GetAuthorizer(GetAuthorizerRequest): Awaitable<Errors\Result<GetAuthorizerResponse>>;
  public function GetAuthorizers(GetAuthorizersRequest): Awaitable<Errors\Result<GetAuthorizersResponse>>;
  public function GetDeployment(GetDeploymentRequest): Awaitable<Errors\Result<GetDeploymentResponse>>;
  public function GetDeployments(GetDeploymentsRequest): Awaitable<Errors\Result<GetDeploymentsResponse>>;
  public function GetDomainName(GetDomainNameRequest): Awaitable<Errors\Result<GetDomainNameResponse>>;
  public function GetDomainNames(GetDomainNamesRequest): Awaitable<Errors\Result<GetDomainNamesResponse>>;
  public function GetIntegration(GetIntegrationRequest): Awaitable<Errors\Result<GetIntegrationResult>>;
  public function GetIntegrationResponse(GetIntegrationResponseRequest): Awaitable<Errors\Result<GetIntegrationResponseResponse>>;
  public function GetIntegrationResponses(GetIntegrationResponsesRequest): Awaitable<Errors\Result<GetIntegrationResponsesResponse>>;
  public function GetIntegrations(GetIntegrationsRequest): Awaitable<Errors\Result<GetIntegrationsResponse>>;
  public function GetModel(GetModelRequest): Awaitable<Errors\Result<GetModelResponse>>;
  public function GetModelTemplate(GetModelTemplateRequest): Awaitable<Errors\Result<GetModelTemplateResponse>>;
  public function GetModels(GetModelsRequest): Awaitable<Errors\Result<GetModelsResponse>>;
  public function GetRoute(GetRouteRequest): Awaitable<Errors\Result<GetRouteResult>>;
  public function GetRouteResponse(GetRouteResponseRequest): Awaitable<Errors\Result<GetRouteResponseResponse>>;
  public function GetRouteResponses(GetRouteResponsesRequest): Awaitable<Errors\Result<GetRouteResponsesResponse>>;
  public function GetRoutes(GetRoutesRequest): Awaitable<Errors\Result<GetRoutesResponse>>;
  public function GetStage(GetStageRequest): Awaitable<Errors\Result<GetStageResponse>>;
  public function GetStages(GetStagesRequest): Awaitable<Errors\Result<GetStagesResponse>>;
  public function GetTags(GetTagsRequest): Awaitable<Errors\Result<GetTagsResponse>>;
  public function GetVpcLink(GetVpcLinkRequest): Awaitable<Errors\Result<GetVpcLinkResponse>>;
  public function GetVpcLinks(GetVpcLinksRequest): Awaitable<Errors\Result<GetVpcLinksResponse>>;
  public function ImportApi(ImportApiRequest): Awaitable<Errors\Result<ImportApiResponse>>;
  public function ReimportApi(ReimportApiRequest): Awaitable<Errors\Result<ReimportApiResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateApi(UpdateApiRequest): Awaitable<Errors\Result<UpdateApiResponse>>;
  public function UpdateApiMapping(UpdateApiMappingRequest): Awaitable<Errors\Result<UpdateApiMappingResponse>>;
  public function UpdateAuthorizer(UpdateAuthorizerRequest): Awaitable<Errors\Result<UpdateAuthorizerResponse>>;
  public function UpdateDeployment(UpdateDeploymentRequest): Awaitable<Errors\Result<UpdateDeploymentResponse>>;
  public function UpdateDomainName(UpdateDomainNameRequest): Awaitable<Errors\Result<UpdateDomainNameResponse>>;
  public function UpdateIntegration(UpdateIntegrationRequest): Awaitable<Errors\Result<UpdateIntegrationResult>>;
  public function UpdateIntegrationResponse(UpdateIntegrationResponseRequest): Awaitable<Errors\Result<UpdateIntegrationResponseResponse>>;
  public function UpdateModel(UpdateModelRequest): Awaitable<Errors\Result<UpdateModelResponse>>;
  public function UpdateRoute(UpdateRouteRequest): Awaitable<Errors\Result<UpdateRouteResult>>;
  public function UpdateRouteResponse(UpdateRouteResponseRequest): Awaitable<Errors\Result<UpdateRouteResponseResponse>>;
  public function UpdateStage(UpdateStageRequest): Awaitable<Errors\Result<UpdateStageResponse>>;
  public function UpdateVpcLink(UpdateVpcLinkRequest): Awaitable<Errors\Result<UpdateVpcLinkResponse>>;
}

class AccessDeniedException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class AccessLogSettings {
  public Arn $destination_arn;
  public StringWithLengthBetween1And1024 $format;

  public function __construct(shape(
  ?'destination_arn' => Arn,
  ?'format' => StringWithLengthBetween1And1024,
  ) $s = shape()) {
    $this->destination_arn = $destination_arn ?? ;
    $this->format = $format ?? ;
  }
}

class Api {
  public __string $api_endpoint;
  public Id $api_id;
  public SelectionExpression $api_key_selection_expression;
  public Cors $cors_configuration;
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween0And1024 $description;
  public __boolean $disable_schema_validation;
  public __listOf__string $import_info;
  public StringWithLengthBetween1And128 $name;
  public ProtocolType $protocol_type;
  public SelectionExpression $route_selection_expression;
  public Tags $tags;
  public StringWithLengthBetween1And64 $version;
  public __listOf__string $warnings;

  public function __construct(shape(
  ?'api_endpoint' => __string,
  ?'api_id' => Id,
  ?'api_key_selection_expression' => SelectionExpression,
  ?'cors_configuration' => Cors,
  ?'created_date' => __timestampIso8601,
  ?'description' => StringWithLengthBetween0And1024,
  ?'disable_schema_validation' => __boolean,
  ?'import_info' => __listOf__string,
  ?'name' => StringWithLengthBetween1And128,
  ?'protocol_type' => ProtocolType,
  ?'route_selection_expression' => SelectionExpression,
  ?'tags' => Tags,
  ?'version' => StringWithLengthBetween1And64,
  ?'warnings' => __listOf__string,
  ) $s = shape()) {
    $this->api_endpoint = $api_endpoint ?? ;
    $this->api_id = $api_id ?? ;
    $this->api_key_selection_expression = $api_key_selection_expression ?? ;
    $this->cors_configuration = $cors_configuration ?? ;
    $this->created_date = $created_date ?? ;
    $this->description = $description ?? ;
    $this->disable_schema_validation = $disable_schema_validation ?? ;
    $this->import_info = $import_info ?? ;
    $this->name = $name ?? ;
    $this->protocol_type = $protocol_type ?? "";
    $this->route_selection_expression = $route_selection_expression ?? ;
    $this->tags = $tags ?? [];
    $this->version = $version ?? ;
    $this->warnings = $warnings ?? ;
  }
}

class ApiMapping {
  public Id $api_id;
  public Id $api_mapping_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
  ?'api_id' => Id,
  ?'api_mapping_id' => Id,
  ?'api_mapping_key' => SelectionKey,
  ?'stage' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->api_mapping_id = $api_mapping_id ?? ;
    $this->api_mapping_key = $api_mapping_key ?? ;
    $this->stage = $stage ?? null;
  }
}

class ApiMappings {
  public __listOfApiMapping $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfApiMapping,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class Apis {
  public __listOfApi $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfApi,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

type Arn = string;

type AuthorizationScopes = vec<StringWithLengthBetween1And64>;

type AuthorizationType = string;

class Authorizer {
  public Arn $authorizer_credentials_arn;
  public Id $authorizer_id;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public AuthorizerType $authorizer_type;
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public IdentitySourceList $identity_source;
  public StringWithLengthBetween0And1024 $identity_validation_expression;
  public JWTConfiguration $jwt_configuration;
  public StringWithLengthBetween1And128 $name;

  public function __construct(shape(
  ?'authorizer_credentials_arn' => Arn,
  ?'authorizer_id' => Id,
  ?'authorizer_result_ttl_in_seconds' => IntegerWithLengthBetween0And3600,
  ?'authorizer_type' => AuthorizerType,
  ?'authorizer_uri' => UriWithLengthBetween1And2048,
  ?'identity_source' => IdentitySourceList,
  ?'identity_validation_expression' => StringWithLengthBetween0And1024,
  ?'jwt_configuration' => JWTConfiguration,
  ?'name' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->authorizer_credentials_arn = $authorizer_credentials_arn ?? ;
    $this->authorizer_id = $authorizer_id ?? ;
    $this->authorizer_result_ttl_in_seconds = $authorizer_result_ttl_in_seconds ?? ;
    $this->authorizer_type = $authorizer_type ?? "";
    $this->authorizer_uri = $authorizer_uri ?? ;
    $this->identity_source = $identity_source ?? ;
    $this->identity_validation_expression = $identity_validation_expression ?? ;
    $this->jwt_configuration = $jwt_configuration ?? ;
    $this->name = $name ?? ;
  }
}

type AuthorizerType = string;

class Authorizers {
  public __listOfAuthorizer $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfAuthorizer,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class BadRequestException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ConflictException {
  public __string $message;

  public function __construct(shape(
  ?'message' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ConnectionType = string;

type ContentHandlingStrategy = string;

class Cors {
  public __boolean $allow_credentials;
  public CorsHeaderList $allow_headers;
  public CorsMethodList $allow_methods;
  public CorsOriginList $allow_origins;
  public CorsHeaderList $expose_headers;
  public IntegerWithLengthBetweenMinus1And86400 $max_age;

  public function __construct(shape(
  ?'allow_credentials' => __boolean,
  ?'allow_headers' => CorsHeaderList,
  ?'allow_methods' => CorsMethodList,
  ?'allow_origins' => CorsOriginList,
  ?'expose_headers' => CorsHeaderList,
  ?'max_age' => IntegerWithLengthBetweenMinus1And86400,
  ) $s = shape()) {
    $this->allow_credentials = $allow_credentials ?? ;
    $this->allow_headers = $allow_headers ?? ;
    $this->allow_methods = $allow_methods ?? ;
    $this->allow_origins = $allow_origins ?? ;
    $this->expose_headers = $expose_headers ?? ;
    $this->max_age = $max_age ?? ;
  }
}

type CorsHeaderList = vec<__string>;

type CorsMethodList = vec<StringWithLengthBetween1And64>;

type CorsOriginList = vec<__string>;

class CreateApiInput {
  public SelectionExpression $api_key_selection_expression;
  public Cors $cors_configuration;
  public Arn $credentials_arn;
  public StringWithLengthBetween0And1024 $description;
  public __boolean $disable_schema_validation;
  public StringWithLengthBetween1And128 $name;
  public ProtocolType $protocol_type;
  public SelectionKey $route_key;
  public SelectionExpression $route_selection_expression;
  public Tags $tags;
  public UriWithLengthBetween1And2048 $target;
  public StringWithLengthBetween1And64 $version;

  public function __construct(shape(
  ?'api_key_selection_expression' => SelectionExpression,
  ?'cors_configuration' => Cors,
  ?'credentials_arn' => Arn,
  ?'description' => StringWithLengthBetween0And1024,
  ?'disable_schema_validation' => __boolean,
  ?'name' => StringWithLengthBetween1And128,
  ?'protocol_type' => ProtocolType,
  ?'route_key' => SelectionKey,
  ?'route_selection_expression' => SelectionExpression,
  ?'tags' => Tags,
  ?'target' => UriWithLengthBetween1And2048,
  ?'version' => StringWithLengthBetween1And64,
  ) $s = shape()) {
    $this->api_key_selection_expression = $api_key_selection_expression ?? ;
    $this->cors_configuration = $cors_configuration ?? ;
    $this->credentials_arn = $credentials_arn ?? ;
    $this->description = $description ?? ;
    $this->disable_schema_validation = $disable_schema_validation ?? ;
    $this->name = $name ?? ;
    $this->protocol_type = $protocol_type ?? "";
    $this->route_key = $route_key ?? ;
    $this->route_selection_expression = $route_selection_expression ?? ;
    $this->tags = $tags ?? [];
    $this->target = $target ?? ;
    $this->version = $version ?? ;
  }
}

class CreateApiMappingInput {
  public Id $api_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
  ?'api_id' => Id,
  ?'api_mapping_key' => SelectionKey,
  ?'stage' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->api_mapping_key = $api_mapping_key ?? ;
    $this->stage = $stage ?? null;
  }
}

class CreateApiMappingRequest {
  public Id $api_id;
  public SelectionKey $api_mapping_key;
  public __string $domain_name;
  public StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
  ?'api_id' => Id,
  ?'api_mapping_key' => SelectionKey,
  ?'domain_name' => __string,
  ?'stage' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->api_mapping_key = $api_mapping_key ?? ;
    $this->domain_name = $domain_name ?? null;
    $this->stage = $stage ?? null;
  }
}

class CreateApiMappingResponse {
  public Id $api_id;
  public Id $api_mapping_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
  ?'api_id' => Id,
  ?'api_mapping_id' => Id,
  ?'api_mapping_key' => SelectionKey,
  ?'stage' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->api_mapping_id = $api_mapping_id ?? ;
    $this->api_mapping_key = $api_mapping_key ?? ;
    $this->stage = $stage ?? null;
  }
}

class CreateApiRequest {
  public SelectionExpression $api_key_selection_expression;
  public Cors $cors_configuration;
  public Arn $credentials_arn;
  public StringWithLengthBetween0And1024 $description;
  public __boolean $disable_schema_validation;
  public StringWithLengthBetween1And128 $name;
  public ProtocolType $protocol_type;
  public SelectionKey $route_key;
  public SelectionExpression $route_selection_expression;
  public Tags $tags;
  public UriWithLengthBetween1And2048 $target;
  public StringWithLengthBetween1And64 $version;

  public function __construct(shape(
  ?'api_key_selection_expression' => SelectionExpression,
  ?'cors_configuration' => Cors,
  ?'credentials_arn' => Arn,
  ?'description' => StringWithLengthBetween0And1024,
  ?'disable_schema_validation' => __boolean,
  ?'name' => StringWithLengthBetween1And128,
  ?'protocol_type' => ProtocolType,
  ?'route_key' => SelectionKey,
  ?'route_selection_expression' => SelectionExpression,
  ?'tags' => Tags,
  ?'target' => UriWithLengthBetween1And2048,
  ?'version' => StringWithLengthBetween1And64,
  ) $s = shape()) {
    $this->api_key_selection_expression = $api_key_selection_expression ?? ;
    $this->cors_configuration = $cors_configuration ?? ;
    $this->credentials_arn = $credentials_arn ?? ;
    $this->description = $description ?? ;
    $this->disable_schema_validation = $disable_schema_validation ?? ;
    $this->name = $name ?? ;
    $this->protocol_type = $protocol_type ?? "";
    $this->route_key = $route_key ?? ;
    $this->route_selection_expression = $route_selection_expression ?? ;
    $this->tags = $tags ?? [];
    $this->target = $target ?? ;
    $this->version = $version ?? ;
  }
}

class CreateApiResponse {
  public __string $api_endpoint;
  public Id $api_id;
  public SelectionExpression $api_key_selection_expression;
  public Cors $cors_configuration;
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween0And1024 $description;
  public __boolean $disable_schema_validation;
  public __listOf__string $import_info;
  public StringWithLengthBetween1And128 $name;
  public ProtocolType $protocol_type;
  public SelectionExpression $route_selection_expression;
  public Tags $tags;
  public StringWithLengthBetween1And64 $version;
  public __listOf__string $warnings;

  public function __construct(shape(
  ?'api_endpoint' => __string,
  ?'api_id' => Id,
  ?'api_key_selection_expression' => SelectionExpression,
  ?'cors_configuration' => Cors,
  ?'created_date' => __timestampIso8601,
  ?'description' => StringWithLengthBetween0And1024,
  ?'disable_schema_validation' => __boolean,
  ?'import_info' => __listOf__string,
  ?'name' => StringWithLengthBetween1And128,
  ?'protocol_type' => ProtocolType,
  ?'route_selection_expression' => SelectionExpression,
  ?'tags' => Tags,
  ?'version' => StringWithLengthBetween1And64,
  ?'warnings' => __listOf__string,
  ) $s = shape()) {
    $this->api_endpoint = $api_endpoint ?? ;
    $this->api_id = $api_id ?? ;
    $this->api_key_selection_expression = $api_key_selection_expression ?? ;
    $this->cors_configuration = $cors_configuration ?? ;
    $this->created_date = $created_date ?? ;
    $this->description = $description ?? ;
    $this->disable_schema_validation = $disable_schema_validation ?? ;
    $this->import_info = $import_info ?? ;
    $this->name = $name ?? ;
    $this->protocol_type = $protocol_type ?? "";
    $this->route_selection_expression = $route_selection_expression ?? ;
    $this->tags = $tags ?? [];
    $this->version = $version ?? ;
    $this->warnings = $warnings ?? ;
  }
}

class CreateAuthorizerInput {
  public Arn $authorizer_credentials_arn;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public AuthorizerType $authorizer_type;
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public IdentitySourceList $identity_source;
  public StringWithLengthBetween0And1024 $identity_validation_expression;
  public JWTConfiguration $jwt_configuration;
  public StringWithLengthBetween1And128 $name;

  public function __construct(shape(
  ?'authorizer_credentials_arn' => Arn,
  ?'authorizer_result_ttl_in_seconds' => IntegerWithLengthBetween0And3600,
  ?'authorizer_type' => AuthorizerType,
  ?'authorizer_uri' => UriWithLengthBetween1And2048,
  ?'identity_source' => IdentitySourceList,
  ?'identity_validation_expression' => StringWithLengthBetween0And1024,
  ?'jwt_configuration' => JWTConfiguration,
  ?'name' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->authorizer_credentials_arn = $authorizer_credentials_arn ?? ;
    $this->authorizer_result_ttl_in_seconds = $authorizer_result_ttl_in_seconds ?? ;
    $this->authorizer_type = $authorizer_type ?? "";
    $this->authorizer_uri = $authorizer_uri ?? ;
    $this->identity_source = $identity_source ?? ;
    $this->identity_validation_expression = $identity_validation_expression ?? ;
    $this->jwt_configuration = $jwt_configuration ?? ;
    $this->name = $name ?? ;
  }
}

class CreateAuthorizerRequest {
  public __string $api_id;
  public Arn $authorizer_credentials_arn;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public AuthorizerType $authorizer_type;
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public IdentitySourceList $identity_source;
  public StringWithLengthBetween0And1024 $identity_validation_expression;
  public JWTConfiguration $jwt_configuration;
  public StringWithLengthBetween1And128 $name;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'authorizer_credentials_arn' => Arn,
  ?'authorizer_result_ttl_in_seconds' => IntegerWithLengthBetween0And3600,
  ?'authorizer_type' => AuthorizerType,
  ?'authorizer_uri' => UriWithLengthBetween1And2048,
  ?'identity_source' => IdentitySourceList,
  ?'identity_validation_expression' => StringWithLengthBetween0And1024,
  ?'jwt_configuration' => JWTConfiguration,
  ?'name' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->authorizer_credentials_arn = $authorizer_credentials_arn ?? ;
    $this->authorizer_result_ttl_in_seconds = $authorizer_result_ttl_in_seconds ?? ;
    $this->authorizer_type = $authorizer_type ?? "";
    $this->authorizer_uri = $authorizer_uri ?? ;
    $this->identity_source = $identity_source ?? ;
    $this->identity_validation_expression = $identity_validation_expression ?? ;
    $this->jwt_configuration = $jwt_configuration ?? ;
    $this->name = $name ?? ;
  }
}

class CreateAuthorizerResponse {
  public Arn $authorizer_credentials_arn;
  public Id $authorizer_id;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public AuthorizerType $authorizer_type;
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public IdentitySourceList $identity_source;
  public StringWithLengthBetween0And1024 $identity_validation_expression;
  public JWTConfiguration $jwt_configuration;
  public StringWithLengthBetween1And128 $name;

  public function __construct(shape(
  ?'authorizer_credentials_arn' => Arn,
  ?'authorizer_id' => Id,
  ?'authorizer_result_ttl_in_seconds' => IntegerWithLengthBetween0And3600,
  ?'authorizer_type' => AuthorizerType,
  ?'authorizer_uri' => UriWithLengthBetween1And2048,
  ?'identity_source' => IdentitySourceList,
  ?'identity_validation_expression' => StringWithLengthBetween0And1024,
  ?'jwt_configuration' => JWTConfiguration,
  ?'name' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->authorizer_credentials_arn = $authorizer_credentials_arn ?? ;
    $this->authorizer_id = $authorizer_id ?? ;
    $this->authorizer_result_ttl_in_seconds = $authorizer_result_ttl_in_seconds ?? ;
    $this->authorizer_type = $authorizer_type ?? "";
    $this->authorizer_uri = $authorizer_uri ?? ;
    $this->identity_source = $identity_source ?? ;
    $this->identity_validation_expression = $identity_validation_expression ?? ;
    $this->jwt_configuration = $jwt_configuration ?? ;
    $this->name = $name ?? ;
  }
}

class CreateDeploymentInput {
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $stage_name;

  public function __construct(shape(
  ?'description' => StringWithLengthBetween0And1024,
  ?'stage_name' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->stage_name = $stage_name ?? ;
  }
}

class CreateDeploymentRequest {
  public __string $api_id;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $stage_name;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'description' => StringWithLengthBetween0And1024,
  ?'stage_name' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->description = $description ?? ;
    $this->stage_name = $stage_name ?? ;
  }
}

class CreateDeploymentResponse {
  public __boolean $auto_deployed;
  public __timestampIso8601 $created_date;
  public Id $deployment_id;
  public DeploymentStatus $deployment_status;
  public __string $deployment_status_message;
  public StringWithLengthBetween0And1024 $description;

  public function __construct(shape(
  ?'auto_deployed' => __boolean,
  ?'created_date' => __timestampIso8601,
  ?'deployment_id' => Id,
  ?'deployment_status' => DeploymentStatus,
  ?'deployment_status_message' => __string,
  ?'description' => StringWithLengthBetween0And1024,
  ) $s = shape()) {
    $this->auto_deployed = $auto_deployed ?? ;
    $this->created_date = $created_date ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->deployment_status = $deployment_status ?? "";
    $this->deployment_status_message = $deployment_status_message ?? ;
    $this->description = $description ?? ;
  }
}

class CreateDomainNameInput {
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
  public Tags $tags;

  public function __construct(shape(
  ?'domain_name' => StringWithLengthBetween1And512,
  ?'domain_name_configurations' => DomainNameConfigurations,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? null;
    $this->domain_name_configurations = $domain_name_configurations ?? [];
    $this->tags = $tags ?? [];
  }
}

class CreateDomainNameRequest {
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
  public Tags $tags;

  public function __construct(shape(
  ?'domain_name' => StringWithLengthBetween1And512,
  ?'domain_name_configurations' => DomainNameConfigurations,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? null;
    $this->domain_name_configurations = $domain_name_configurations ?? [];
    $this->tags = $tags ?? [];
  }
}

class CreateDomainNameResponse {
  public SelectionExpression $api_mapping_selection_expression;
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
  public Tags $tags;

  public function __construct(shape(
  ?'api_mapping_selection_expression' => SelectionExpression,
  ?'domain_name' => StringWithLengthBetween1And512,
  ?'domain_name_configurations' => DomainNameConfigurations,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->api_mapping_selection_expression = $api_mapping_selection_expression ?? ;
    $this->domain_name = $domain_name ?? null;
    $this->domain_name_configurations = $domain_name_configurations ?? [];
    $this->tags = $tags ?? [];
  }
}

class CreateIntegrationInput {
  public StringWithLengthBetween1And1024 $connection_id;
  public ConnectionType $connection_type;
  public ContentHandlingStrategy $content_handling_strategy;
  public Arn $credentials_arn;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And64 $integration_method;
  public IntegrationType $integration_type;
  public UriWithLengthBetween1And2048 $integration_uri;
  public PassthroughBehavior $passthrough_behavior;
  public StringWithLengthBetween1And64 $payload_format_version;
  public IntegrationParameters $request_parameters;
  public TemplateMap $request_templates;
  public SelectionExpression $template_selection_expression;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public TlsConfigInput $tls_config;

  public function __construct(shape(
  ?'connection_id' => StringWithLengthBetween1And1024,
  ?'connection_type' => ConnectionType,
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'credentials_arn' => Arn,
  ?'description' => StringWithLengthBetween0And1024,
  ?'integration_method' => StringWithLengthBetween1And64,
  ?'integration_type' => IntegrationType,
  ?'integration_uri' => UriWithLengthBetween1And2048,
  ?'passthrough_behavior' => PassthroughBehavior,
  ?'payload_format_version' => StringWithLengthBetween1And64,
  ?'request_parameters' => IntegrationParameters,
  ?'request_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ?'timeout_in_millis' => IntegerWithLengthBetween50And30000,
  ?'tls_config' => TlsConfigInput,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? ;
    $this->connection_type = $connection_type ?? "";
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->credentials_arn = $credentials_arn ?? ;
    $this->description = $description ?? ;
    $this->integration_method = $integration_method ?? ;
    $this->integration_type = $integration_type ?? "";
    $this->integration_uri = $integration_uri ?? ;
    $this->passthrough_behavior = $passthrough_behavior ?? "";
    $this->payload_format_version = $payload_format_version ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->request_templates = $request_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
    $this->timeout_in_millis = $timeout_in_millis ?? ;
    $this->tls_config = $tls_config ?? null;
  }
}

class CreateIntegrationRequest {
  public __string $api_id;
  public StringWithLengthBetween1And1024 $connection_id;
  public ConnectionType $connection_type;
  public ContentHandlingStrategy $content_handling_strategy;
  public Arn $credentials_arn;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And64 $integration_method;
  public IntegrationType $integration_type;
  public UriWithLengthBetween1And2048 $integration_uri;
  public PassthroughBehavior $passthrough_behavior;
  public StringWithLengthBetween1And64 $payload_format_version;
  public IntegrationParameters $request_parameters;
  public TemplateMap $request_templates;
  public SelectionExpression $template_selection_expression;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public TlsConfigInput $tls_config;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'connection_id' => StringWithLengthBetween1And1024,
  ?'connection_type' => ConnectionType,
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'credentials_arn' => Arn,
  ?'description' => StringWithLengthBetween0And1024,
  ?'integration_method' => StringWithLengthBetween1And64,
  ?'integration_type' => IntegrationType,
  ?'integration_uri' => UriWithLengthBetween1And2048,
  ?'passthrough_behavior' => PassthroughBehavior,
  ?'payload_format_version' => StringWithLengthBetween1And64,
  ?'request_parameters' => IntegrationParameters,
  ?'request_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ?'timeout_in_millis' => IntegerWithLengthBetween50And30000,
  ?'tls_config' => TlsConfigInput,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->connection_id = $connection_id ?? ;
    $this->connection_type = $connection_type ?? "";
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->credentials_arn = $credentials_arn ?? ;
    $this->description = $description ?? ;
    $this->integration_method = $integration_method ?? ;
    $this->integration_type = $integration_type ?? "";
    $this->integration_uri = $integration_uri ?? ;
    $this->passthrough_behavior = $passthrough_behavior ?? "";
    $this->payload_format_version = $payload_format_version ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->request_templates = $request_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
    $this->timeout_in_millis = $timeout_in_millis ?? ;
    $this->tls_config = $tls_config ?? null;
  }
}

class CreateIntegrationResponseInput {
  public ContentHandlingStrategy $content_handling_strategy;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;

  public function __construct(shape(
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'integration_response_key' => SelectionKey,
  ?'response_parameters' => IntegrationParameters,
  ?'response_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ) $s = shape()) {
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->integration_response_key = $integration_response_key ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->response_templates = $response_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
  }
}

class CreateIntegrationResponseRequest {
  public __string $api_id;
  public ContentHandlingStrategy $content_handling_strategy;
  public __string $integration_id;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'integration_id' => __string,
  ?'integration_response_key' => SelectionKey,
  ?'response_parameters' => IntegrationParameters,
  ?'response_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->integration_id = $integration_id ?? ;
    $this->integration_response_key = $integration_response_key ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->response_templates = $response_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
  }
}

class CreateIntegrationResponseResponse {
  public ContentHandlingStrategy $content_handling_strategy;
  public Id $integration_response_id;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;

  public function __construct(shape(
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'integration_response_id' => Id,
  ?'integration_response_key' => SelectionKey,
  ?'response_parameters' => IntegrationParameters,
  ?'response_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ) $s = shape()) {
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->integration_response_id = $integration_response_id ?? ;
    $this->integration_response_key = $integration_response_key ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->response_templates = $response_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
  }
}

class CreateIntegrationResult {
  public __boolean $api_gateway_managed;
  public StringWithLengthBetween1And1024 $connection_id;
  public ConnectionType $connection_type;
  public ContentHandlingStrategy $content_handling_strategy;
  public Arn $credentials_arn;
  public StringWithLengthBetween0And1024 $description;
  public Id $integration_id;
  public StringWithLengthBetween1And64 $integration_method;
  public SelectionExpression $integration_response_selection_expression;
  public IntegrationType $integration_type;
  public UriWithLengthBetween1And2048 $integration_uri;
  public PassthroughBehavior $passthrough_behavior;
  public StringWithLengthBetween1And64 $payload_format_version;
  public IntegrationParameters $request_parameters;
  public TemplateMap $request_templates;
  public SelectionExpression $template_selection_expression;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public TlsConfig $tls_config;

  public function __construct(shape(
  ?'api_gateway_managed' => __boolean,
  ?'connection_id' => StringWithLengthBetween1And1024,
  ?'connection_type' => ConnectionType,
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'credentials_arn' => Arn,
  ?'description' => StringWithLengthBetween0And1024,
  ?'integration_id' => Id,
  ?'integration_method' => StringWithLengthBetween1And64,
  ?'integration_response_selection_expression' => SelectionExpression,
  ?'integration_type' => IntegrationType,
  ?'integration_uri' => UriWithLengthBetween1And2048,
  ?'passthrough_behavior' => PassthroughBehavior,
  ?'payload_format_version' => StringWithLengthBetween1And64,
  ?'request_parameters' => IntegrationParameters,
  ?'request_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ?'timeout_in_millis' => IntegerWithLengthBetween50And30000,
  ?'tls_config' => TlsConfig,
  ) $s = shape()) {
    $this->api_gateway_managed = $api_gateway_managed ?? ;
    $this->connection_id = $connection_id ?? ;
    $this->connection_type = $connection_type ?? "";
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->credentials_arn = $credentials_arn ?? ;
    $this->description = $description ?? ;
    $this->integration_id = $integration_id ?? ;
    $this->integration_method = $integration_method ?? ;
    $this->integration_response_selection_expression = $integration_response_selection_expression ?? ;
    $this->integration_type = $integration_type ?? "";
    $this->integration_uri = $integration_uri ?? ;
    $this->passthrough_behavior = $passthrough_behavior ?? "";
    $this->payload_format_version = $payload_format_version ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->request_templates = $request_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
    $this->timeout_in_millis = $timeout_in_millis ?? ;
    $this->tls_config = $tls_config ?? null;
  }
}

class CreateModelInput {
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
  ?'content_type' => StringWithLengthBetween1And256,
  ?'description' => StringWithLengthBetween0And1024,
  ?'name' => StringWithLengthBetween1And128,
  ?'schema' => StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->content_type = $content_type ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->schema = $schema ?? ;
  }
}

class CreateModelRequest {
  public __string $api_id;
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'content_type' => StringWithLengthBetween1And256,
  ?'description' => StringWithLengthBetween0And1024,
  ?'name' => StringWithLengthBetween1And128,
  ?'schema' => StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->content_type = $content_type ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->schema = $schema ?? ;
  }
}

class CreateModelResponse {
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public Id $model_id;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
  ?'content_type' => StringWithLengthBetween1And256,
  ?'description' => StringWithLengthBetween0And1024,
  ?'model_id' => Id,
  ?'name' => StringWithLengthBetween1And128,
  ?'schema' => StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->content_type = $content_type ?? ;
    $this->description = $description ?? ;
    $this->model_id = $model_id ?? ;
    $this->name = $name ?? ;
    $this->schema = $schema ?? ;
  }
}

class CreateRouteInput {
  public __boolean $api_key_required;
  public AuthorizationScopes $authorization_scopes;
  public AuthorizationType $authorization_type;
  public Id $authorizer_id;
  public SelectionExpression $model_selection_expression;
  public StringWithLengthBetween1And64 $operation_name;
  public RouteModels $request_models;
  public RouteParameters $request_parameters;
  public SelectionKey $route_key;
  public SelectionExpression $route_response_selection_expression;
  public StringWithLengthBetween1And128 $target;

  public function __construct(shape(
  ?'api_key_required' => __boolean,
  ?'authorization_scopes' => AuthorizationScopes,
  ?'authorization_type' => AuthorizationType,
  ?'authorizer_id' => Id,
  ?'model_selection_expression' => SelectionExpression,
  ?'operation_name' => StringWithLengthBetween1And64,
  ?'request_models' => RouteModels,
  ?'request_parameters' => RouteParameters,
  ?'route_key' => SelectionKey,
  ?'route_response_selection_expression' => SelectionExpression,
  ?'target' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_key_required = $api_key_required ?? ;
    $this->authorization_scopes = $authorization_scopes ?? [];
    $this->authorization_type = $authorization_type ?? "";
    $this->authorizer_id = $authorizer_id ?? ;
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->operation_name = $operation_name ?? ;
    $this->request_models = $request_models ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->route_key = $route_key ?? ;
    $this->route_response_selection_expression = $route_response_selection_expression ?? ;
    $this->target = $target ?? ;
  }
}

class CreateRouteRequest {
  public __string $api_id;
  public __boolean $api_key_required;
  public AuthorizationScopes $authorization_scopes;
  public AuthorizationType $authorization_type;
  public Id $authorizer_id;
  public SelectionExpression $model_selection_expression;
  public StringWithLengthBetween1And64 $operation_name;
  public RouteModels $request_models;
  public RouteParameters $request_parameters;
  public SelectionKey $route_key;
  public SelectionExpression $route_response_selection_expression;
  public StringWithLengthBetween1And128 $target;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'api_key_required' => __boolean,
  ?'authorization_scopes' => AuthorizationScopes,
  ?'authorization_type' => AuthorizationType,
  ?'authorizer_id' => Id,
  ?'model_selection_expression' => SelectionExpression,
  ?'operation_name' => StringWithLengthBetween1And64,
  ?'request_models' => RouteModels,
  ?'request_parameters' => RouteParameters,
  ?'route_key' => SelectionKey,
  ?'route_response_selection_expression' => SelectionExpression,
  ?'target' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->api_key_required = $api_key_required ?? ;
    $this->authorization_scopes = $authorization_scopes ?? [];
    $this->authorization_type = $authorization_type ?? "";
    $this->authorizer_id = $authorizer_id ?? ;
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->operation_name = $operation_name ?? ;
    $this->request_models = $request_models ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->route_key = $route_key ?? ;
    $this->route_response_selection_expression = $route_response_selection_expression ?? ;
    $this->target = $target ?? ;
  }
}

class CreateRouteResponseInput {
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public SelectionKey $route_response_key;

  public function __construct(shape(
  ?'model_selection_expression' => SelectionExpression,
  ?'response_models' => RouteModels,
  ?'response_parameters' => RouteParameters,
  ?'route_response_key' => SelectionKey,
  ) $s = shape()) {
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->response_models = $response_models ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->route_response_key = $route_response_key ?? ;
  }
}

class CreateRouteResponseRequest {
  public __string $api_id;
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public __string $route_id;
  public SelectionKey $route_response_key;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'model_selection_expression' => SelectionExpression,
  ?'response_models' => RouteModels,
  ?'response_parameters' => RouteParameters,
  ?'route_id' => __string,
  ?'route_response_key' => SelectionKey,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->response_models = $response_models ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->route_id = $route_id ?? ;
    $this->route_response_key = $route_response_key ?? ;
  }
}

class CreateRouteResponseResponse {
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public Id $route_response_id;
  public SelectionKey $route_response_key;

  public function __construct(shape(
  ?'model_selection_expression' => SelectionExpression,
  ?'response_models' => RouteModels,
  ?'response_parameters' => RouteParameters,
  ?'route_response_id' => Id,
  ?'route_response_key' => SelectionKey,
  ) $s = shape()) {
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->response_models = $response_models ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->route_response_id = $route_response_id ?? ;
    $this->route_response_key = $route_response_key ?? ;
  }
}

class CreateRouteResult {
  public __boolean $api_gateway_managed;
  public __boolean $api_key_required;
  public AuthorizationScopes $authorization_scopes;
  public AuthorizationType $authorization_type;
  public Id $authorizer_id;
  public SelectionExpression $model_selection_expression;
  public StringWithLengthBetween1And64 $operation_name;
  public RouteModels $request_models;
  public RouteParameters $request_parameters;
  public Id $route_id;
  public SelectionKey $route_key;
  public SelectionExpression $route_response_selection_expression;
  public StringWithLengthBetween1And128 $target;

  public function __construct(shape(
  ?'api_gateway_managed' => __boolean,
  ?'api_key_required' => __boolean,
  ?'authorization_scopes' => AuthorizationScopes,
  ?'authorization_type' => AuthorizationType,
  ?'authorizer_id' => Id,
  ?'model_selection_expression' => SelectionExpression,
  ?'operation_name' => StringWithLengthBetween1And64,
  ?'request_models' => RouteModels,
  ?'request_parameters' => RouteParameters,
  ?'route_id' => Id,
  ?'route_key' => SelectionKey,
  ?'route_response_selection_expression' => SelectionExpression,
  ?'target' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_gateway_managed = $api_gateway_managed ?? ;
    $this->api_key_required = $api_key_required ?? ;
    $this->authorization_scopes = $authorization_scopes ?? [];
    $this->authorization_type = $authorization_type ?? "";
    $this->authorizer_id = $authorizer_id ?? ;
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->operation_name = $operation_name ?? ;
    $this->request_models = $request_models ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->route_id = $route_id ?? ;
    $this->route_key = $route_key ?? ;
    $this->route_response_selection_expression = $route_response_selection_expression ?? ;
    $this->target = $target ?? ;
  }
}

class CreateStageInput {
  public AccessLogSettings $access_log_settings;
  public __boolean $auto_deploy;
  public Id $client_certificate_id;
  public RouteSettings $default_route_settings;
  public Id $deployment_id;
  public StringWithLengthBetween0And1024 $description;
  public RouteSettingsMap $route_settings;
  public StringWithLengthBetween1And128 $stage_name;
  public StageVariablesMap $stage_variables;
  public Tags $tags;

  public function __construct(shape(
  ?'access_log_settings' => AccessLogSettings,
  ?'auto_deploy' => __boolean,
  ?'client_certificate_id' => Id,
  ?'default_route_settings' => RouteSettings,
  ?'deployment_id' => Id,
  ?'description' => StringWithLengthBetween0And1024,
  ?'route_settings' => RouteSettingsMap,
  ?'stage_name' => StringWithLengthBetween1And128,
  ?'stage_variables' => StageVariablesMap,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->access_log_settings = $access_log_settings ?? null;
    $this->auto_deploy = $auto_deploy ?? ;
    $this->client_certificate_id = $client_certificate_id ?? ;
    $this->default_route_settings = $default_route_settings ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->description = $description ?? ;
    $this->route_settings = $route_settings ?? null;
    $this->stage_name = $stage_name ?? ;
    $this->stage_variables = $stage_variables ?? ;
    $this->tags = $tags ?? [];
  }
}

class CreateStageRequest {
  public AccessLogSettings $access_log_settings;
  public __string $api_id;
  public __boolean $auto_deploy;
  public Id $client_certificate_id;
  public RouteSettings $default_route_settings;
  public Id $deployment_id;
  public StringWithLengthBetween0And1024 $description;
  public RouteSettingsMap $route_settings;
  public StringWithLengthBetween1And128 $stage_name;
  public StageVariablesMap $stage_variables;
  public Tags $tags;

  public function __construct(shape(
  ?'access_log_settings' => AccessLogSettings,
  ?'api_id' => __string,
  ?'auto_deploy' => __boolean,
  ?'client_certificate_id' => Id,
  ?'default_route_settings' => RouteSettings,
  ?'deployment_id' => Id,
  ?'description' => StringWithLengthBetween0And1024,
  ?'route_settings' => RouteSettingsMap,
  ?'stage_name' => StringWithLengthBetween1And128,
  ?'stage_variables' => StageVariablesMap,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->access_log_settings = $access_log_settings ?? null;
    $this->api_id = $api_id ?? ;
    $this->auto_deploy = $auto_deploy ?? ;
    $this->client_certificate_id = $client_certificate_id ?? ;
    $this->default_route_settings = $default_route_settings ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->description = $description ?? ;
    $this->route_settings = $route_settings ?? null;
    $this->stage_name = $stage_name ?? ;
    $this->stage_variables = $stage_variables ?? ;
    $this->tags = $tags ?? [];
  }
}

class CreateStageResponse {
  public AccessLogSettings $access_log_settings;
  public __boolean $api_gateway_managed;
  public __boolean $auto_deploy;
  public Id $client_certificate_id;
  public __timestampIso8601 $created_date;
  public RouteSettings $default_route_settings;
  public Id $deployment_id;
  public StringWithLengthBetween0And1024 $description;
  public __string $last_deployment_status_message;
  public __timestampIso8601 $last_updated_date;
  public RouteSettingsMap $route_settings;
  public StringWithLengthBetween1And128 $stage_name;
  public StageVariablesMap $stage_variables;
  public Tags $tags;

  public function __construct(shape(
  ?'access_log_settings' => AccessLogSettings,
  ?'api_gateway_managed' => __boolean,
  ?'auto_deploy' => __boolean,
  ?'client_certificate_id' => Id,
  ?'created_date' => __timestampIso8601,
  ?'default_route_settings' => RouteSettings,
  ?'deployment_id' => Id,
  ?'description' => StringWithLengthBetween0And1024,
  ?'last_deployment_status_message' => __string,
  ?'last_updated_date' => __timestampIso8601,
  ?'route_settings' => RouteSettingsMap,
  ?'stage_name' => StringWithLengthBetween1And128,
  ?'stage_variables' => StageVariablesMap,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->access_log_settings = $access_log_settings ?? null;
    $this->api_gateway_managed = $api_gateway_managed ?? ;
    $this->auto_deploy = $auto_deploy ?? ;
    $this->client_certificate_id = $client_certificate_id ?? ;
    $this->created_date = $created_date ?? ;
    $this->default_route_settings = $default_route_settings ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->description = $description ?? ;
    $this->last_deployment_status_message = $last_deployment_status_message ?? ;
    $this->last_updated_date = $last_updated_date ?? ;
    $this->route_settings = $route_settings ?? null;
    $this->stage_name = $stage_name ?? ;
    $this->stage_variables = $stage_variables ?? ;
    $this->tags = $tags ?? [];
  }
}

class CreateVpcLinkInput {
  public StringWithLengthBetween1And128 $name;
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
  public Tags $tags;

  public function __construct(shape(
  ?'name' => StringWithLengthBetween1And128,
  ?'security_group_ids' => SecurityGroupIdList,
  ?'subnet_ids' => SubnetIdList,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
    $this->tags = $tags ?? [];
  }
}

class CreateVpcLinkRequest {
  public StringWithLengthBetween1And128 $name;
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
  public Tags $tags;

  public function __construct(shape(
  ?'name' => StringWithLengthBetween1And128,
  ?'security_group_ids' => SecurityGroupIdList,
  ?'subnet_ids' => SubnetIdList,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
    $this->tags = $tags ?? [];
  }
}

class CreateVpcLinkResponse {
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween1And128 $name;
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
  public Tags $tags;
  public Id $vpc_link_id;
  public VpcLinkStatus $vpc_link_status;
  public StringWithLengthBetween0And1024 $vpc_link_status_message;
  public VpcLinkVersion $vpc_link_version;

  public function __construct(shape(
  ?'created_date' => __timestampIso8601,
  ?'name' => StringWithLengthBetween1And128,
  ?'security_group_ids' => SecurityGroupIdList,
  ?'subnet_ids' => SubnetIdList,
  ?'tags' => Tags,
  ?'vpc_link_id' => Id,
  ?'vpc_link_status' => VpcLinkStatus,
  ?'vpc_link_status_message' => StringWithLengthBetween0And1024,
  ?'vpc_link_version' => VpcLinkVersion,
  ) $s = shape()) {
    $this->created_date = $created_date ?? ;
    $this->name = $name ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
    $this->tags = $tags ?? [];
    $this->vpc_link_id = $vpc_link_id ?? ;
    $this->vpc_link_status = $vpc_link_status ?? "";
    $this->vpc_link_status_message = $vpc_link_status_message ?? ;
    $this->vpc_link_version = $vpc_link_version ?? "";
  }
}

class DeleteAccessLogSettingsRequest {
  public __string $api_id;
  public __string $stage_name;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'stage_name' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->stage_name = $stage_name ?? ;
  }
}

class DeleteApiMappingRequest {
  public __string $api_mapping_id;
  public __string $domain_name;

  public function __construct(shape(
  ?'api_mapping_id' => __string,
  ?'domain_name' => __string,
  ) $s = shape()) {
    $this->api_mapping_id = $api_mapping_id ?? ;
    $this->domain_name = $domain_name ?? null;
  }
}

class DeleteApiRequest {
  public __string $api_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
  }
}

class DeleteAuthorizerRequest {
  public __string $api_id;
  public __string $authorizer_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'authorizer_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->authorizer_id = $authorizer_id ?? ;
  }
}

class DeleteCorsConfigurationRequest {
  public __string $api_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
  }
}

class DeleteDeploymentRequest {
  public __string $api_id;
  public __string $deployment_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'deployment_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->deployment_id = $deployment_id ?? ;
  }
}

class DeleteDomainNameRequest {
  public __string $domain_name;

  public function __construct(shape(
  ?'domain_name' => __string,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? null;
  }
}

class DeleteIntegrationRequest {
  public __string $api_id;
  public __string $integration_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'integration_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->integration_id = $integration_id ?? ;
  }
}

class DeleteIntegrationResponseRequest {
  public __string $api_id;
  public __string $integration_id;
  public __string $integration_response_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'integration_id' => __string,
  ?'integration_response_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->integration_id = $integration_id ?? ;
    $this->integration_response_id = $integration_response_id ?? ;
  }
}

class DeleteModelRequest {
  public __string $api_id;
  public __string $model_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'model_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->model_id = $model_id ?? ;
  }
}

class DeleteRouteRequest {
  public __string $api_id;
  public __string $route_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'route_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->route_id = $route_id ?? ;
  }
}

class DeleteRouteRequestParameterRequest {
  public __string $api_id;
  public __string $request_parameter_key;
  public __string $route_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'request_parameter_key' => __string,
  ?'route_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->request_parameter_key = $request_parameter_key ?? ;
    $this->route_id = $route_id ?? ;
  }
}

class DeleteRouteResponseRequest {
  public __string $api_id;
  public __string $route_id;
  public __string $route_response_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'route_id' => __string,
  ?'route_response_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->route_id = $route_id ?? ;
    $this->route_response_id = $route_response_id ?? ;
  }
}

class DeleteRouteSettingsRequest {
  public __string $api_id;
  public __string $route_key;
  public __string $stage_name;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'route_key' => __string,
  ?'stage_name' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->route_key = $route_key ?? ;
    $this->stage_name = $stage_name ?? ;
  }
}

class DeleteStageRequest {
  public __string $api_id;
  public __string $stage_name;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'stage_name' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->stage_name = $stage_name ?? ;
  }
}

class DeleteVpcLinkRequest {
  public __string $vpc_link_id;

  public function __construct(shape(
  ?'vpc_link_id' => __string,
  ) $s = shape()) {
    $this->vpc_link_id = $vpc_link_id ?? ;
  }
}

class DeleteVpcLinkResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Deployment {
  public __boolean $auto_deployed;
  public __timestampIso8601 $created_date;
  public Id $deployment_id;
  public DeploymentStatus $deployment_status;
  public __string $deployment_status_message;
  public StringWithLengthBetween0And1024 $description;

  public function __construct(shape(
  ?'auto_deployed' => __boolean,
  ?'created_date' => __timestampIso8601,
  ?'deployment_id' => Id,
  ?'deployment_status' => DeploymentStatus,
  ?'deployment_status_message' => __string,
  ?'description' => StringWithLengthBetween0And1024,
  ) $s = shape()) {
    $this->auto_deployed = $auto_deployed ?? ;
    $this->created_date = $created_date ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->deployment_status = $deployment_status ?? "";
    $this->deployment_status_message = $deployment_status_message ?? ;
    $this->description = $description ?? ;
  }
}

type DeploymentStatus = string;

class Deployments {
  public __listOfDeployment $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfDeployment,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class DomainName {
  public SelectionExpression $api_mapping_selection_expression;
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
  public Tags $tags;

  public function __construct(shape(
  ?'api_mapping_selection_expression' => SelectionExpression,
  ?'domain_name' => StringWithLengthBetween1And512,
  ?'domain_name_configurations' => DomainNameConfigurations,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->api_mapping_selection_expression = $api_mapping_selection_expression ?? ;
    $this->domain_name = $domain_name ?? null;
    $this->domain_name_configurations = $domain_name_configurations ?? [];
    $this->tags = $tags ?? [];
  }
}

class DomainNameConfiguration {
  public __string $api_gateway_domain_name;
  public Arn $certificate_arn;
  public StringWithLengthBetween1And128 $certificate_name;
  public __timestampIso8601 $certificate_upload_date;
  public DomainNameStatus $domain_name_status;
  public __string $domain_name_status_message;
  public EndpointType $endpoint_type;
  public __string $hosted_zone_id;
  public SecurityPolicy $security_policy;

  public function __construct(shape(
  ?'api_gateway_domain_name' => __string,
  ?'certificate_arn' => Arn,
  ?'certificate_name' => StringWithLengthBetween1And128,
  ?'certificate_upload_date' => __timestampIso8601,
  ?'domain_name_status' => DomainNameStatus,
  ?'domain_name_status_message' => __string,
  ?'endpoint_type' => EndpointType,
  ?'hosted_zone_id' => __string,
  ?'security_policy' => SecurityPolicy,
  ) $s = shape()) {
    $this->api_gateway_domain_name = $api_gateway_domain_name ?? ;
    $this->certificate_arn = $certificate_arn ?? ;
    $this->certificate_name = $certificate_name ?? ;
    $this->certificate_upload_date = $certificate_upload_date ?? ;
    $this->domain_name_status = $domain_name_status ?? "";
    $this->domain_name_status_message = $domain_name_status_message ?? ;
    $this->endpoint_type = $endpoint_type ?? "";
    $this->hosted_zone_id = $hosted_zone_id ?? ;
    $this->security_policy = $security_policy ?? "";
  }
}

type DomainNameConfigurations = vec<DomainNameConfiguration>;

type DomainNameStatus = string;

class DomainNames {
  public __listOfDomainName $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfDomainName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

type EndpointType = string;

class ExportApiRequest {
  public __string $api_id;
  public __string $export_version;
  public __boolean $include_extensions;
  public __string $output_type;
  public __string $specification;
  public __string $stage_name;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'export_version' => __string,
  ?'include_extensions' => __boolean,
  ?'output_type' => __string,
  ?'specification' => __string,
  ?'stage_name' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->export_version = $export_version ?? ;
    $this->include_extensions = $include_extensions ?? ;
    $this->output_type = $output_type ?? ;
    $this->specification = $specification ?? ;
    $this->stage_name = $stage_name ?? ;
  }
}

class ExportApiResponse {
  public ExportedApi $body;

  public function __construct(shape(
  ?'body' => ExportedApi,
  ) $s = shape()) {
    $this->body = $body ?? ;
  }
}

type ExportedApi = string;

class GetApiMappingRequest {
  public __string $api_mapping_id;
  public __string $domain_name;

  public function __construct(shape(
  ?'api_mapping_id' => __string,
  ?'domain_name' => __string,
  ) $s = shape()) {
    $this->api_mapping_id = $api_mapping_id ?? ;
    $this->domain_name = $domain_name ?? null;
  }
}

class GetApiMappingResponse {
  public Id $api_id;
  public Id $api_mapping_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
  ?'api_id' => Id,
  ?'api_mapping_id' => Id,
  ?'api_mapping_key' => SelectionKey,
  ?'stage' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->api_mapping_id = $api_mapping_id ?? ;
    $this->api_mapping_key = $api_mapping_key ?? ;
    $this->stage = $stage ?? null;
  }
}

class GetApiMappingsRequest {
  public __string $domain_name;
  public __string $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'domain_name' => __string,
  ?'max_results' => __string,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? null;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetApiMappingsResponse {
  public __listOfApiMapping $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfApiMapping,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetApiRequest {
  public __string $api_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
  }
}

class GetApiResponse {
  public __string $api_endpoint;
  public Id $api_id;
  public SelectionExpression $api_key_selection_expression;
  public Cors $cors_configuration;
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween0And1024 $description;
  public __boolean $disable_schema_validation;
  public __listOf__string $import_info;
  public StringWithLengthBetween1And128 $name;
  public ProtocolType $protocol_type;
  public SelectionExpression $route_selection_expression;
  public Tags $tags;
  public StringWithLengthBetween1And64 $version;
  public __listOf__string $warnings;

  public function __construct(shape(
  ?'api_endpoint' => __string,
  ?'api_id' => Id,
  ?'api_key_selection_expression' => SelectionExpression,
  ?'cors_configuration' => Cors,
  ?'created_date' => __timestampIso8601,
  ?'description' => StringWithLengthBetween0And1024,
  ?'disable_schema_validation' => __boolean,
  ?'import_info' => __listOf__string,
  ?'name' => StringWithLengthBetween1And128,
  ?'protocol_type' => ProtocolType,
  ?'route_selection_expression' => SelectionExpression,
  ?'tags' => Tags,
  ?'version' => StringWithLengthBetween1And64,
  ?'warnings' => __listOf__string,
  ) $s = shape()) {
    $this->api_endpoint = $api_endpoint ?? ;
    $this->api_id = $api_id ?? ;
    $this->api_key_selection_expression = $api_key_selection_expression ?? ;
    $this->cors_configuration = $cors_configuration ?? ;
    $this->created_date = $created_date ?? ;
    $this->description = $description ?? ;
    $this->disable_schema_validation = $disable_schema_validation ?? ;
    $this->import_info = $import_info ?? ;
    $this->name = $name ?? ;
    $this->protocol_type = $protocol_type ?? "";
    $this->route_selection_expression = $route_selection_expression ?? ;
    $this->tags = $tags ?? [];
    $this->version = $version ?? ;
    $this->warnings = $warnings ?? ;
  }
}

class GetApisRequest {
  public __string $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'max_results' => __string,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetApisResponse {
  public __listOfApi $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfApi,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetAuthorizerRequest {
  public __string $api_id;
  public __string $authorizer_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'authorizer_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->authorizer_id = $authorizer_id ?? ;
  }
}

class GetAuthorizerResponse {
  public Arn $authorizer_credentials_arn;
  public Id $authorizer_id;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public AuthorizerType $authorizer_type;
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public IdentitySourceList $identity_source;
  public StringWithLengthBetween0And1024 $identity_validation_expression;
  public JWTConfiguration $jwt_configuration;
  public StringWithLengthBetween1And128 $name;

  public function __construct(shape(
  ?'authorizer_credentials_arn' => Arn,
  ?'authorizer_id' => Id,
  ?'authorizer_result_ttl_in_seconds' => IntegerWithLengthBetween0And3600,
  ?'authorizer_type' => AuthorizerType,
  ?'authorizer_uri' => UriWithLengthBetween1And2048,
  ?'identity_source' => IdentitySourceList,
  ?'identity_validation_expression' => StringWithLengthBetween0And1024,
  ?'jwt_configuration' => JWTConfiguration,
  ?'name' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->authorizer_credentials_arn = $authorizer_credentials_arn ?? ;
    $this->authorizer_id = $authorizer_id ?? ;
    $this->authorizer_result_ttl_in_seconds = $authorizer_result_ttl_in_seconds ?? ;
    $this->authorizer_type = $authorizer_type ?? "";
    $this->authorizer_uri = $authorizer_uri ?? ;
    $this->identity_source = $identity_source ?? ;
    $this->identity_validation_expression = $identity_validation_expression ?? ;
    $this->jwt_configuration = $jwt_configuration ?? ;
    $this->name = $name ?? ;
  }
}

class GetAuthorizersRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'max_results' => __string,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetAuthorizersResponse {
  public __listOfAuthorizer $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfAuthorizer,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetDeploymentRequest {
  public __string $api_id;
  public __string $deployment_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'deployment_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->deployment_id = $deployment_id ?? ;
  }
}

class GetDeploymentResponse {
  public __boolean $auto_deployed;
  public __timestampIso8601 $created_date;
  public Id $deployment_id;
  public DeploymentStatus $deployment_status;
  public __string $deployment_status_message;
  public StringWithLengthBetween0And1024 $description;

  public function __construct(shape(
  ?'auto_deployed' => __boolean,
  ?'created_date' => __timestampIso8601,
  ?'deployment_id' => Id,
  ?'deployment_status' => DeploymentStatus,
  ?'deployment_status_message' => __string,
  ?'description' => StringWithLengthBetween0And1024,
  ) $s = shape()) {
    $this->auto_deployed = $auto_deployed ?? ;
    $this->created_date = $created_date ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->deployment_status = $deployment_status ?? "";
    $this->deployment_status_message = $deployment_status_message ?? ;
    $this->description = $description ?? ;
  }
}

class GetDeploymentsRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'max_results' => __string,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetDeploymentsResponse {
  public __listOfDeployment $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfDeployment,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetDomainNameRequest {
  public __string $domain_name;

  public function __construct(shape(
  ?'domain_name' => __string,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? null;
  }
}

class GetDomainNameResponse {
  public SelectionExpression $api_mapping_selection_expression;
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
  public Tags $tags;

  public function __construct(shape(
  ?'api_mapping_selection_expression' => SelectionExpression,
  ?'domain_name' => StringWithLengthBetween1And512,
  ?'domain_name_configurations' => DomainNameConfigurations,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->api_mapping_selection_expression = $api_mapping_selection_expression ?? ;
    $this->domain_name = $domain_name ?? null;
    $this->domain_name_configurations = $domain_name_configurations ?? [];
    $this->tags = $tags ?? [];
  }
}

class GetDomainNamesRequest {
  public __string $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'max_results' => __string,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetDomainNamesResponse {
  public __listOfDomainName $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfDomainName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetIntegrationRequest {
  public __string $api_id;
  public __string $integration_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'integration_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->integration_id = $integration_id ?? ;
  }
}

class GetIntegrationResponseRequest {
  public __string $api_id;
  public __string $integration_id;
  public __string $integration_response_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'integration_id' => __string,
  ?'integration_response_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->integration_id = $integration_id ?? ;
    $this->integration_response_id = $integration_response_id ?? ;
  }
}

class GetIntegrationResponseResponse {
  public ContentHandlingStrategy $content_handling_strategy;
  public Id $integration_response_id;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;

  public function __construct(shape(
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'integration_response_id' => Id,
  ?'integration_response_key' => SelectionKey,
  ?'response_parameters' => IntegrationParameters,
  ?'response_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ) $s = shape()) {
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->integration_response_id = $integration_response_id ?? ;
    $this->integration_response_key = $integration_response_key ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->response_templates = $response_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
  }
}

class GetIntegrationResponsesRequest {
  public __string $api_id;
  public __string $integration_id;
  public __string $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'integration_id' => __string,
  ?'max_results' => __string,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->integration_id = $integration_id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetIntegrationResponsesResponse {
  public __listOfIntegrationResponse $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfIntegrationResponse,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetIntegrationResult {
  public __boolean $api_gateway_managed;
  public StringWithLengthBetween1And1024 $connection_id;
  public ConnectionType $connection_type;
  public ContentHandlingStrategy $content_handling_strategy;
  public Arn $credentials_arn;
  public StringWithLengthBetween0And1024 $description;
  public Id $integration_id;
  public StringWithLengthBetween1And64 $integration_method;
  public SelectionExpression $integration_response_selection_expression;
  public IntegrationType $integration_type;
  public UriWithLengthBetween1And2048 $integration_uri;
  public PassthroughBehavior $passthrough_behavior;
  public StringWithLengthBetween1And64 $payload_format_version;
  public IntegrationParameters $request_parameters;
  public TemplateMap $request_templates;
  public SelectionExpression $template_selection_expression;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public TlsConfig $tls_config;

  public function __construct(shape(
  ?'api_gateway_managed' => __boolean,
  ?'connection_id' => StringWithLengthBetween1And1024,
  ?'connection_type' => ConnectionType,
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'credentials_arn' => Arn,
  ?'description' => StringWithLengthBetween0And1024,
  ?'integration_id' => Id,
  ?'integration_method' => StringWithLengthBetween1And64,
  ?'integration_response_selection_expression' => SelectionExpression,
  ?'integration_type' => IntegrationType,
  ?'integration_uri' => UriWithLengthBetween1And2048,
  ?'passthrough_behavior' => PassthroughBehavior,
  ?'payload_format_version' => StringWithLengthBetween1And64,
  ?'request_parameters' => IntegrationParameters,
  ?'request_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ?'timeout_in_millis' => IntegerWithLengthBetween50And30000,
  ?'tls_config' => TlsConfig,
  ) $s = shape()) {
    $this->api_gateway_managed = $api_gateway_managed ?? ;
    $this->connection_id = $connection_id ?? ;
    $this->connection_type = $connection_type ?? "";
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->credentials_arn = $credentials_arn ?? ;
    $this->description = $description ?? ;
    $this->integration_id = $integration_id ?? ;
    $this->integration_method = $integration_method ?? ;
    $this->integration_response_selection_expression = $integration_response_selection_expression ?? ;
    $this->integration_type = $integration_type ?? "";
    $this->integration_uri = $integration_uri ?? ;
    $this->passthrough_behavior = $passthrough_behavior ?? "";
    $this->payload_format_version = $payload_format_version ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->request_templates = $request_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
    $this->timeout_in_millis = $timeout_in_millis ?? ;
    $this->tls_config = $tls_config ?? null;
  }
}

class GetIntegrationsRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'max_results' => __string,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetIntegrationsResponse {
  public __listOfIntegration $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfIntegration,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetModelRequest {
  public __string $api_id;
  public __string $model_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'model_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->model_id = $model_id ?? ;
  }
}

class GetModelResponse {
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public Id $model_id;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
  ?'content_type' => StringWithLengthBetween1And256,
  ?'description' => StringWithLengthBetween0And1024,
  ?'model_id' => Id,
  ?'name' => StringWithLengthBetween1And128,
  ?'schema' => StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->content_type = $content_type ?? ;
    $this->description = $description ?? ;
    $this->model_id = $model_id ?? ;
    $this->name = $name ?? ;
    $this->schema = $schema ?? ;
  }
}

class GetModelTemplateRequest {
  public __string $api_id;
  public __string $model_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'model_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->model_id = $model_id ?? ;
  }
}

class GetModelTemplateResponse {
  public __string $value;

  public function __construct(shape(
  ?'value' => __string,
  ) $s = shape()) {
    $this->value = $value ?? ;
  }
}

class GetModelsRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'max_results' => __string,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetModelsResponse {
  public __listOfModel $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfModel,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetRouteRequest {
  public __string $api_id;
  public __string $route_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'route_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->route_id = $route_id ?? ;
  }
}

class GetRouteResponseRequest {
  public __string $api_id;
  public __string $route_id;
  public __string $route_response_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'route_id' => __string,
  ?'route_response_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->route_id = $route_id ?? ;
    $this->route_response_id = $route_response_id ?? ;
  }
}

class GetRouteResponseResponse {
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public Id $route_response_id;
  public SelectionKey $route_response_key;

  public function __construct(shape(
  ?'model_selection_expression' => SelectionExpression,
  ?'response_models' => RouteModels,
  ?'response_parameters' => RouteParameters,
  ?'route_response_id' => Id,
  ?'route_response_key' => SelectionKey,
  ) $s = shape()) {
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->response_models = $response_models ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->route_response_id = $route_response_id ?? ;
    $this->route_response_key = $route_response_key ?? ;
  }
}

class GetRouteResponsesRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;
  public __string $route_id;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'max_results' => __string,
  ?'next_token' => __string,
  ?'route_id' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
    $this->route_id = $route_id ?? ;
  }
}

class GetRouteResponsesResponse {
  public __listOfRouteResponse $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfRouteResponse,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetRouteResult {
  public __boolean $api_gateway_managed;
  public __boolean $api_key_required;
  public AuthorizationScopes $authorization_scopes;
  public AuthorizationType $authorization_type;
  public Id $authorizer_id;
  public SelectionExpression $model_selection_expression;
  public StringWithLengthBetween1And64 $operation_name;
  public RouteModels $request_models;
  public RouteParameters $request_parameters;
  public Id $route_id;
  public SelectionKey $route_key;
  public SelectionExpression $route_response_selection_expression;
  public StringWithLengthBetween1And128 $target;

  public function __construct(shape(
  ?'api_gateway_managed' => __boolean,
  ?'api_key_required' => __boolean,
  ?'authorization_scopes' => AuthorizationScopes,
  ?'authorization_type' => AuthorizationType,
  ?'authorizer_id' => Id,
  ?'model_selection_expression' => SelectionExpression,
  ?'operation_name' => StringWithLengthBetween1And64,
  ?'request_models' => RouteModels,
  ?'request_parameters' => RouteParameters,
  ?'route_id' => Id,
  ?'route_key' => SelectionKey,
  ?'route_response_selection_expression' => SelectionExpression,
  ?'target' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_gateway_managed = $api_gateway_managed ?? ;
    $this->api_key_required = $api_key_required ?? ;
    $this->authorization_scopes = $authorization_scopes ?? [];
    $this->authorization_type = $authorization_type ?? "";
    $this->authorizer_id = $authorizer_id ?? ;
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->operation_name = $operation_name ?? ;
    $this->request_models = $request_models ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->route_id = $route_id ?? ;
    $this->route_key = $route_key ?? ;
    $this->route_response_selection_expression = $route_response_selection_expression ?? ;
    $this->target = $target ?? ;
  }
}

class GetRoutesRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'max_results' => __string,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetRoutesResponse {
  public __listOfRoute $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfRoute,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetStageRequest {
  public __string $api_id;
  public __string $stage_name;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'stage_name' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->stage_name = $stage_name ?? ;
  }
}

class GetStageResponse {
  public AccessLogSettings $access_log_settings;
  public __boolean $api_gateway_managed;
  public __boolean $auto_deploy;
  public Id $client_certificate_id;
  public __timestampIso8601 $created_date;
  public RouteSettings $default_route_settings;
  public Id $deployment_id;
  public StringWithLengthBetween0And1024 $description;
  public __string $last_deployment_status_message;
  public __timestampIso8601 $last_updated_date;
  public RouteSettingsMap $route_settings;
  public StringWithLengthBetween1And128 $stage_name;
  public StageVariablesMap $stage_variables;
  public Tags $tags;

  public function __construct(shape(
  ?'access_log_settings' => AccessLogSettings,
  ?'api_gateway_managed' => __boolean,
  ?'auto_deploy' => __boolean,
  ?'client_certificate_id' => Id,
  ?'created_date' => __timestampIso8601,
  ?'default_route_settings' => RouteSettings,
  ?'deployment_id' => Id,
  ?'description' => StringWithLengthBetween0And1024,
  ?'last_deployment_status_message' => __string,
  ?'last_updated_date' => __timestampIso8601,
  ?'route_settings' => RouteSettingsMap,
  ?'stage_name' => StringWithLengthBetween1And128,
  ?'stage_variables' => StageVariablesMap,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->access_log_settings = $access_log_settings ?? null;
    $this->api_gateway_managed = $api_gateway_managed ?? ;
    $this->auto_deploy = $auto_deploy ?? ;
    $this->client_certificate_id = $client_certificate_id ?? ;
    $this->created_date = $created_date ?? ;
    $this->default_route_settings = $default_route_settings ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->description = $description ?? ;
    $this->last_deployment_status_message = $last_deployment_status_message ?? ;
    $this->last_updated_date = $last_updated_date ?? ;
    $this->route_settings = $route_settings ?? null;
    $this->stage_name = $stage_name ?? ;
    $this->stage_variables = $stage_variables ?? ;
    $this->tags = $tags ?? [];
  }
}

class GetStagesRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'max_results' => __string,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetStagesResponse {
  public __listOfStage $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfStage,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetTagsRequest {
  public __string $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
  }
}

class GetTagsResponse {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class GetVpcLinkRequest {
  public __string $vpc_link_id;

  public function __construct(shape(
  ?'vpc_link_id' => __string,
  ) $s = shape()) {
    $this->vpc_link_id = $vpc_link_id ?? ;
  }
}

class GetVpcLinkResponse {
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween1And128 $name;
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
  public Tags $tags;
  public Id $vpc_link_id;
  public VpcLinkStatus $vpc_link_status;
  public StringWithLengthBetween0And1024 $vpc_link_status_message;
  public VpcLinkVersion $vpc_link_version;

  public function __construct(shape(
  ?'created_date' => __timestampIso8601,
  ?'name' => StringWithLengthBetween1And128,
  ?'security_group_ids' => SecurityGroupIdList,
  ?'subnet_ids' => SubnetIdList,
  ?'tags' => Tags,
  ?'vpc_link_id' => Id,
  ?'vpc_link_status' => VpcLinkStatus,
  ?'vpc_link_status_message' => StringWithLengthBetween0And1024,
  ?'vpc_link_version' => VpcLinkVersion,
  ) $s = shape()) {
    $this->created_date = $created_date ?? ;
    $this->name = $name ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
    $this->tags = $tags ?? [];
    $this->vpc_link_id = $vpc_link_id ?? ;
    $this->vpc_link_status = $vpc_link_status ?? "";
    $this->vpc_link_status_message = $vpc_link_status_message ?? ;
    $this->vpc_link_version = $vpc_link_version ?? "";
  }
}

class GetVpcLinksRequest {
  public __string $max_results;
  public __string $next_token;

  public function __construct(shape(
  ?'max_results' => __string,
  ?'next_token' => __string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class GetVpcLinksResponse {
  public __listOfVpcLink $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfVpcLink,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

type Id = string;

type IdentitySourceList = vec<__string>;

class ImportApiInput {
  public __string $body;

  public function __construct(shape(
  ?'body' => __string,
  ) $s = shape()) {
    $this->body = $body ?? ;
  }
}

class ImportApiRequest {
  public __string $basepath;
  public __string $body;
  public __boolean $fail_on_warnings;

  public function __construct(shape(
  ?'basepath' => __string,
  ?'body' => __string,
  ?'fail_on_warnings' => __boolean,
  ) $s = shape()) {
    $this->basepath = $basepath ?? ;
    $this->body = $body ?? ;
    $this->fail_on_warnings = $fail_on_warnings ?? ;
  }
}

class ImportApiResponse {
  public __string $api_endpoint;
  public Id $api_id;
  public SelectionExpression $api_key_selection_expression;
  public Cors $cors_configuration;
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween0And1024 $description;
  public __boolean $disable_schema_validation;
  public __listOf__string $import_info;
  public StringWithLengthBetween1And128 $name;
  public ProtocolType $protocol_type;
  public SelectionExpression $route_selection_expression;
  public Tags $tags;
  public StringWithLengthBetween1And64 $version;
  public __listOf__string $warnings;

  public function __construct(shape(
  ?'api_endpoint' => __string,
  ?'api_id' => Id,
  ?'api_key_selection_expression' => SelectionExpression,
  ?'cors_configuration' => Cors,
  ?'created_date' => __timestampIso8601,
  ?'description' => StringWithLengthBetween0And1024,
  ?'disable_schema_validation' => __boolean,
  ?'import_info' => __listOf__string,
  ?'name' => StringWithLengthBetween1And128,
  ?'protocol_type' => ProtocolType,
  ?'route_selection_expression' => SelectionExpression,
  ?'tags' => Tags,
  ?'version' => StringWithLengthBetween1And64,
  ?'warnings' => __listOf__string,
  ) $s = shape()) {
    $this->api_endpoint = $api_endpoint ?? ;
    $this->api_id = $api_id ?? ;
    $this->api_key_selection_expression = $api_key_selection_expression ?? ;
    $this->cors_configuration = $cors_configuration ?? ;
    $this->created_date = $created_date ?? ;
    $this->description = $description ?? ;
    $this->disable_schema_validation = $disable_schema_validation ?? ;
    $this->import_info = $import_info ?? ;
    $this->name = $name ?? ;
    $this->protocol_type = $protocol_type ?? "";
    $this->route_selection_expression = $route_selection_expression ?? ;
    $this->tags = $tags ?? [];
    $this->version = $version ?? ;
    $this->warnings = $warnings ?? ;
  }
}

type IntegerWithLengthBetween0And3600 = int;

type IntegerWithLengthBetween50And30000 = int;

type IntegerWithLengthBetweenMinus1And86400 = int;

class Integration {
  public __boolean $api_gateway_managed;
  public StringWithLengthBetween1And1024 $connection_id;
  public ConnectionType $connection_type;
  public ContentHandlingStrategy $content_handling_strategy;
  public Arn $credentials_arn;
  public StringWithLengthBetween0And1024 $description;
  public Id $integration_id;
  public StringWithLengthBetween1And64 $integration_method;
  public SelectionExpression $integration_response_selection_expression;
  public IntegrationType $integration_type;
  public UriWithLengthBetween1And2048 $integration_uri;
  public PassthroughBehavior $passthrough_behavior;
  public StringWithLengthBetween1And64 $payload_format_version;
  public IntegrationParameters $request_parameters;
  public TemplateMap $request_templates;
  public SelectionExpression $template_selection_expression;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public TlsConfig $tls_config;

  public function __construct(shape(
  ?'api_gateway_managed' => __boolean,
  ?'connection_id' => StringWithLengthBetween1And1024,
  ?'connection_type' => ConnectionType,
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'credentials_arn' => Arn,
  ?'description' => StringWithLengthBetween0And1024,
  ?'integration_id' => Id,
  ?'integration_method' => StringWithLengthBetween1And64,
  ?'integration_response_selection_expression' => SelectionExpression,
  ?'integration_type' => IntegrationType,
  ?'integration_uri' => UriWithLengthBetween1And2048,
  ?'passthrough_behavior' => PassthroughBehavior,
  ?'payload_format_version' => StringWithLengthBetween1And64,
  ?'request_parameters' => IntegrationParameters,
  ?'request_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ?'timeout_in_millis' => IntegerWithLengthBetween50And30000,
  ?'tls_config' => TlsConfig,
  ) $s = shape()) {
    $this->api_gateway_managed = $api_gateway_managed ?? ;
    $this->connection_id = $connection_id ?? ;
    $this->connection_type = $connection_type ?? "";
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->credentials_arn = $credentials_arn ?? ;
    $this->description = $description ?? ;
    $this->integration_id = $integration_id ?? ;
    $this->integration_method = $integration_method ?? ;
    $this->integration_response_selection_expression = $integration_response_selection_expression ?? ;
    $this->integration_type = $integration_type ?? "";
    $this->integration_uri = $integration_uri ?? ;
    $this->passthrough_behavior = $passthrough_behavior ?? "";
    $this->payload_format_version = $payload_format_version ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->request_templates = $request_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
    $this->timeout_in_millis = $timeout_in_millis ?? ;
    $this->tls_config = $tls_config ?? null;
  }
}

type IntegrationParameters = dict<__string, StringWithLengthBetween1And512>;

class IntegrationResponse {
  public ContentHandlingStrategy $content_handling_strategy;
  public Id $integration_response_id;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;

  public function __construct(shape(
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'integration_response_id' => Id,
  ?'integration_response_key' => SelectionKey,
  ?'response_parameters' => IntegrationParameters,
  ?'response_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ) $s = shape()) {
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->integration_response_id = $integration_response_id ?? ;
    $this->integration_response_key = $integration_response_key ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->response_templates = $response_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
  }
}

class IntegrationResponses {
  public __listOfIntegrationResponse $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfIntegrationResponse,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

type IntegrationType = string;

class Integrations {
  public __listOfIntegration $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfIntegration,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class JWTConfiguration {
  public __listOf__string $audience;
  public UriWithLengthBetween1And2048 $issuer;

  public function __construct(shape(
  ?'audience' => __listOf__string,
  ?'issuer' => UriWithLengthBetween1And2048,
  ) $s = shape()) {
    $this->audience = $audience ?? ;
    $this->issuer = $issuer ?? ;
  }
}

class LimitExceededException {
  public __string $limit_type;
  public __string $message;

  public function __construct(shape(
  ?'limit_type' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->limit_type = $limit_type ?? ;
    $this->message = $message ?? ;
  }
}

type LoggingLevel = string;

class Model {
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public Id $model_id;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
  ?'content_type' => StringWithLengthBetween1And256,
  ?'description' => StringWithLengthBetween0And1024,
  ?'model_id' => Id,
  ?'name' => StringWithLengthBetween1And128,
  ?'schema' => StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->content_type = $content_type ?? ;
    $this->description = $description ?? ;
    $this->model_id = $model_id ?? ;
    $this->name = $name ?? ;
    $this->schema = $schema ?? ;
  }
}

class Models {
  public __listOfModel $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfModel,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

type NextToken = string;

class NotFoundException {
  public __string $message;
  public __string $resource_type;

  public function __construct(shape(
  ?'message' => __string,
  ?'resource_type' => __string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->resource_type = $resource_type ?? ;
  }
}

class ParameterConstraints {
  public __boolean $required;

  public function __construct(shape(
  ?'required' => __boolean,
  ) $s = shape()) {
    $this->required = $required ?? ;
  }
}

type PassthroughBehavior = string;

type ProtocolType = string;

class ReimportApiInput {
  public __string $body;

  public function __construct(shape(
  ?'body' => __string,
  ) $s = shape()) {
    $this->body = $body ?? ;
  }
}

class ReimportApiRequest {
  public __string $api_id;
  public __string $basepath;
  public __string $body;
  public __boolean $fail_on_warnings;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'basepath' => __string,
  ?'body' => __string,
  ?'fail_on_warnings' => __boolean,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->basepath = $basepath ?? ;
    $this->body = $body ?? ;
    $this->fail_on_warnings = $fail_on_warnings ?? ;
  }
}

class ReimportApiResponse {
  public __string $api_endpoint;
  public Id $api_id;
  public SelectionExpression $api_key_selection_expression;
  public Cors $cors_configuration;
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween0And1024 $description;
  public __boolean $disable_schema_validation;
  public __listOf__string $import_info;
  public StringWithLengthBetween1And128 $name;
  public ProtocolType $protocol_type;
  public SelectionExpression $route_selection_expression;
  public Tags $tags;
  public StringWithLengthBetween1And64 $version;
  public __listOf__string $warnings;

  public function __construct(shape(
  ?'api_endpoint' => __string,
  ?'api_id' => Id,
  ?'api_key_selection_expression' => SelectionExpression,
  ?'cors_configuration' => Cors,
  ?'created_date' => __timestampIso8601,
  ?'description' => StringWithLengthBetween0And1024,
  ?'disable_schema_validation' => __boolean,
  ?'import_info' => __listOf__string,
  ?'name' => StringWithLengthBetween1And128,
  ?'protocol_type' => ProtocolType,
  ?'route_selection_expression' => SelectionExpression,
  ?'tags' => Tags,
  ?'version' => StringWithLengthBetween1And64,
  ?'warnings' => __listOf__string,
  ) $s = shape()) {
    $this->api_endpoint = $api_endpoint ?? ;
    $this->api_id = $api_id ?? ;
    $this->api_key_selection_expression = $api_key_selection_expression ?? ;
    $this->cors_configuration = $cors_configuration ?? ;
    $this->created_date = $created_date ?? ;
    $this->description = $description ?? ;
    $this->disable_schema_validation = $disable_schema_validation ?? ;
    $this->import_info = $import_info ?? ;
    $this->name = $name ?? ;
    $this->protocol_type = $protocol_type ?? "";
    $this->route_selection_expression = $route_selection_expression ?? ;
    $this->tags = $tags ?? [];
    $this->version = $version ?? ;
    $this->warnings = $warnings ?? ;
  }
}

class Route {
  public __boolean $api_gateway_managed;
  public __boolean $api_key_required;
  public AuthorizationScopes $authorization_scopes;
  public AuthorizationType $authorization_type;
  public Id $authorizer_id;
  public SelectionExpression $model_selection_expression;
  public StringWithLengthBetween1And64 $operation_name;
  public RouteModels $request_models;
  public RouteParameters $request_parameters;
  public Id $route_id;
  public SelectionKey $route_key;
  public SelectionExpression $route_response_selection_expression;
  public StringWithLengthBetween1And128 $target;

  public function __construct(shape(
  ?'api_gateway_managed' => __boolean,
  ?'api_key_required' => __boolean,
  ?'authorization_scopes' => AuthorizationScopes,
  ?'authorization_type' => AuthorizationType,
  ?'authorizer_id' => Id,
  ?'model_selection_expression' => SelectionExpression,
  ?'operation_name' => StringWithLengthBetween1And64,
  ?'request_models' => RouteModels,
  ?'request_parameters' => RouteParameters,
  ?'route_id' => Id,
  ?'route_key' => SelectionKey,
  ?'route_response_selection_expression' => SelectionExpression,
  ?'target' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_gateway_managed = $api_gateway_managed ?? ;
    $this->api_key_required = $api_key_required ?? ;
    $this->authorization_scopes = $authorization_scopes ?? [];
    $this->authorization_type = $authorization_type ?? "";
    $this->authorizer_id = $authorizer_id ?? ;
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->operation_name = $operation_name ?? ;
    $this->request_models = $request_models ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->route_id = $route_id ?? ;
    $this->route_key = $route_key ?? ;
    $this->route_response_selection_expression = $route_response_selection_expression ?? ;
    $this->target = $target ?? ;
  }
}

type RouteModels = dict<__string, StringWithLengthBetween1And128>;

type RouteParameters = dict<__string, ParameterConstraints>;

class RouteResponse {
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public Id $route_response_id;
  public SelectionKey $route_response_key;

  public function __construct(shape(
  ?'model_selection_expression' => SelectionExpression,
  ?'response_models' => RouteModels,
  ?'response_parameters' => RouteParameters,
  ?'route_response_id' => Id,
  ?'route_response_key' => SelectionKey,
  ) $s = shape()) {
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->response_models = $response_models ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->route_response_id = $route_response_id ?? ;
    $this->route_response_key = $route_response_key ?? ;
  }
}

class RouteResponses {
  public __listOfRouteResponse $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfRouteResponse,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class RouteSettings {
  public __boolean $data_trace_enabled;
  public __boolean $detailed_metrics_enabled;
  public LoggingLevel $logging_level;
  public __integer $throttling_burst_limit;
  public __double $throttling_rate_limit;

  public function __construct(shape(
  ?'data_trace_enabled' => __boolean,
  ?'detailed_metrics_enabled' => __boolean,
  ?'logging_level' => LoggingLevel,
  ?'throttling_burst_limit' => __integer,
  ?'throttling_rate_limit' => __double,
  ) $s = shape()) {
    $this->data_trace_enabled = $data_trace_enabled ?? ;
    $this->detailed_metrics_enabled = $detailed_metrics_enabled ?? ;
    $this->logging_level = $logging_level ?? "";
    $this->throttling_burst_limit = $throttling_burst_limit ?? ;
    $this->throttling_rate_limit = $throttling_rate_limit ?? ;
  }
}

type RouteSettingsMap = dict<__string, RouteSettings>;

class Routes {
  public __listOfRoute $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfRoute,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

type SecurityGroupIdList = vec<__string>;

type SecurityPolicy = string;

type SelectionExpression = string;

type SelectionKey = string;

class Stage {
  public AccessLogSettings $access_log_settings;
  public __boolean $api_gateway_managed;
  public __boolean $auto_deploy;
  public Id $client_certificate_id;
  public __timestampIso8601 $created_date;
  public RouteSettings $default_route_settings;
  public Id $deployment_id;
  public StringWithLengthBetween0And1024 $description;
  public __string $last_deployment_status_message;
  public __timestampIso8601 $last_updated_date;
  public RouteSettingsMap $route_settings;
  public StringWithLengthBetween1And128 $stage_name;
  public StageVariablesMap $stage_variables;
  public Tags $tags;

  public function __construct(shape(
  ?'access_log_settings' => AccessLogSettings,
  ?'api_gateway_managed' => __boolean,
  ?'auto_deploy' => __boolean,
  ?'client_certificate_id' => Id,
  ?'created_date' => __timestampIso8601,
  ?'default_route_settings' => RouteSettings,
  ?'deployment_id' => Id,
  ?'description' => StringWithLengthBetween0And1024,
  ?'last_deployment_status_message' => __string,
  ?'last_updated_date' => __timestampIso8601,
  ?'route_settings' => RouteSettingsMap,
  ?'stage_name' => StringWithLengthBetween1And128,
  ?'stage_variables' => StageVariablesMap,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->access_log_settings = $access_log_settings ?? null;
    $this->api_gateway_managed = $api_gateway_managed ?? ;
    $this->auto_deploy = $auto_deploy ?? ;
    $this->client_certificate_id = $client_certificate_id ?? ;
    $this->created_date = $created_date ?? ;
    $this->default_route_settings = $default_route_settings ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->description = $description ?? ;
    $this->last_deployment_status_message = $last_deployment_status_message ?? ;
    $this->last_updated_date = $last_updated_date ?? ;
    $this->route_settings = $route_settings ?? null;
    $this->stage_name = $stage_name ?? ;
    $this->stage_variables = $stage_variables ?? ;
    $this->tags = $tags ?? [];
  }
}

type StageVariablesMap = dict<__string, StringWithLengthBetween0And2048>;

class Stages {
  public __listOfStage $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfStage,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

type StringWithLengthBetween0And1024 = string;

type StringWithLengthBetween0And2048 = string;

type StringWithLengthBetween0And32K = string;

type StringWithLengthBetween1And1024 = string;

type StringWithLengthBetween1And128 = string;

type StringWithLengthBetween1And1600 = string;

type StringWithLengthBetween1And256 = string;

type StringWithLengthBetween1And512 = string;

type StringWithLengthBetween1And64 = string;

type SubnetIdList = vec<__string>;

class TagResourceInput {
  public Tags $tags;

  public function __construct(shape(
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class TagResourceRequest {
  public __string $resource_arn;
  public Tags $tags;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Tags = dict<__string, StringWithLengthBetween1And1600>;

class Template {
  public __string $value;

  public function __construct(shape(
  ?'value' => __string,
  ) $s = shape()) {
    $this->value = $value ?? ;
  }
}

type TemplateMap = dict<__string, StringWithLengthBetween0And32K>;

class TlsConfig {
  public StringWithLengthBetween1And512 $server_name_to_verify;

  public function __construct(shape(
  ?'server_name_to_verify' => StringWithLengthBetween1And512,
  ) $s = shape()) {
    $this->server_name_to_verify = $server_name_to_verify ?? ;
  }
}

class TlsConfigInput {
  public StringWithLengthBetween1And512 $server_name_to_verify;

  public function __construct(shape(
  ?'server_name_to_verify' => StringWithLengthBetween1And512,
  ) $s = shape()) {
    $this->server_name_to_verify = $server_name_to_verify ?? ;
  }
}

class TooManyRequestsException {
  public __string $limit_type;
  public __string $message;

  public function __construct(shape(
  ?'limit_type' => __string,
  ?'message' => __string,
  ) $s = shape()) {
    $this->limit_type = $limit_type ?? ;
    $this->message = $message ?? ;
  }
}

class UntagResourceRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => __string,
  ?'tag_keys' => __listOf__string,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UpdateApiInput {
  public SelectionExpression $api_key_selection_expression;
  public Cors $cors_configuration;
  public Arn $credentials_arn;
  public StringWithLengthBetween0And1024 $description;
  public __boolean $disable_schema_validation;
  public StringWithLengthBetween1And128 $name;
  public SelectionKey $route_key;
  public SelectionExpression $route_selection_expression;
  public UriWithLengthBetween1And2048 $target;
  public StringWithLengthBetween1And64 $version;

  public function __construct(shape(
  ?'api_key_selection_expression' => SelectionExpression,
  ?'cors_configuration' => Cors,
  ?'credentials_arn' => Arn,
  ?'description' => StringWithLengthBetween0And1024,
  ?'disable_schema_validation' => __boolean,
  ?'name' => StringWithLengthBetween1And128,
  ?'route_key' => SelectionKey,
  ?'route_selection_expression' => SelectionExpression,
  ?'target' => UriWithLengthBetween1And2048,
  ?'version' => StringWithLengthBetween1And64,
  ) $s = shape()) {
    $this->api_key_selection_expression = $api_key_selection_expression ?? ;
    $this->cors_configuration = $cors_configuration ?? ;
    $this->credentials_arn = $credentials_arn ?? ;
    $this->description = $description ?? ;
    $this->disable_schema_validation = $disable_schema_validation ?? ;
    $this->name = $name ?? ;
    $this->route_key = $route_key ?? ;
    $this->route_selection_expression = $route_selection_expression ?? ;
    $this->target = $target ?? ;
    $this->version = $version ?? ;
  }
}

class UpdateApiMappingInput {
  public Id $api_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
  ?'api_id' => Id,
  ?'api_mapping_key' => SelectionKey,
  ?'stage' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->api_mapping_key = $api_mapping_key ?? ;
    $this->stage = $stage ?? null;
  }
}

class UpdateApiMappingRequest {
  public Id $api_id;
  public __string $api_mapping_id;
  public SelectionKey $api_mapping_key;
  public __string $domain_name;
  public StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
  ?'api_id' => Id,
  ?'api_mapping_id' => __string,
  ?'api_mapping_key' => SelectionKey,
  ?'domain_name' => __string,
  ?'stage' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->api_mapping_id = $api_mapping_id ?? ;
    $this->api_mapping_key = $api_mapping_key ?? ;
    $this->domain_name = $domain_name ?? null;
    $this->stage = $stage ?? null;
  }
}

class UpdateApiMappingResponse {
  public Id $api_id;
  public Id $api_mapping_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
  ?'api_id' => Id,
  ?'api_mapping_id' => Id,
  ?'api_mapping_key' => SelectionKey,
  ?'stage' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->api_mapping_id = $api_mapping_id ?? ;
    $this->api_mapping_key = $api_mapping_key ?? ;
    $this->stage = $stage ?? null;
  }
}

class UpdateApiRequest {
  public __string $api_id;
  public SelectionExpression $api_key_selection_expression;
  public Cors $cors_configuration;
  public Arn $credentials_arn;
  public StringWithLengthBetween0And1024 $description;
  public __boolean $disable_schema_validation;
  public StringWithLengthBetween1And128 $name;
  public SelectionKey $route_key;
  public SelectionExpression $route_selection_expression;
  public UriWithLengthBetween1And2048 $target;
  public StringWithLengthBetween1And64 $version;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'api_key_selection_expression' => SelectionExpression,
  ?'cors_configuration' => Cors,
  ?'credentials_arn' => Arn,
  ?'description' => StringWithLengthBetween0And1024,
  ?'disable_schema_validation' => __boolean,
  ?'name' => StringWithLengthBetween1And128,
  ?'route_key' => SelectionKey,
  ?'route_selection_expression' => SelectionExpression,
  ?'target' => UriWithLengthBetween1And2048,
  ?'version' => StringWithLengthBetween1And64,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->api_key_selection_expression = $api_key_selection_expression ?? ;
    $this->cors_configuration = $cors_configuration ?? ;
    $this->credentials_arn = $credentials_arn ?? ;
    $this->description = $description ?? ;
    $this->disable_schema_validation = $disable_schema_validation ?? ;
    $this->name = $name ?? ;
    $this->route_key = $route_key ?? ;
    $this->route_selection_expression = $route_selection_expression ?? ;
    $this->target = $target ?? ;
    $this->version = $version ?? ;
  }
}

class UpdateApiResponse {
  public __string $api_endpoint;
  public Id $api_id;
  public SelectionExpression $api_key_selection_expression;
  public Cors $cors_configuration;
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween0And1024 $description;
  public __boolean $disable_schema_validation;
  public __listOf__string $import_info;
  public StringWithLengthBetween1And128 $name;
  public ProtocolType $protocol_type;
  public SelectionExpression $route_selection_expression;
  public Tags $tags;
  public StringWithLengthBetween1And64 $version;
  public __listOf__string $warnings;

  public function __construct(shape(
  ?'api_endpoint' => __string,
  ?'api_id' => Id,
  ?'api_key_selection_expression' => SelectionExpression,
  ?'cors_configuration' => Cors,
  ?'created_date' => __timestampIso8601,
  ?'description' => StringWithLengthBetween0And1024,
  ?'disable_schema_validation' => __boolean,
  ?'import_info' => __listOf__string,
  ?'name' => StringWithLengthBetween1And128,
  ?'protocol_type' => ProtocolType,
  ?'route_selection_expression' => SelectionExpression,
  ?'tags' => Tags,
  ?'version' => StringWithLengthBetween1And64,
  ?'warnings' => __listOf__string,
  ) $s = shape()) {
    $this->api_endpoint = $api_endpoint ?? ;
    $this->api_id = $api_id ?? ;
    $this->api_key_selection_expression = $api_key_selection_expression ?? ;
    $this->cors_configuration = $cors_configuration ?? ;
    $this->created_date = $created_date ?? ;
    $this->description = $description ?? ;
    $this->disable_schema_validation = $disable_schema_validation ?? ;
    $this->import_info = $import_info ?? ;
    $this->name = $name ?? ;
    $this->protocol_type = $protocol_type ?? "";
    $this->route_selection_expression = $route_selection_expression ?? ;
    $this->tags = $tags ?? [];
    $this->version = $version ?? ;
    $this->warnings = $warnings ?? ;
  }
}

class UpdateAuthorizerInput {
  public Arn $authorizer_credentials_arn;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public AuthorizerType $authorizer_type;
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public IdentitySourceList $identity_source;
  public StringWithLengthBetween0And1024 $identity_validation_expression;
  public JWTConfiguration $jwt_configuration;
  public StringWithLengthBetween1And128 $name;

  public function __construct(shape(
  ?'authorizer_credentials_arn' => Arn,
  ?'authorizer_result_ttl_in_seconds' => IntegerWithLengthBetween0And3600,
  ?'authorizer_type' => AuthorizerType,
  ?'authorizer_uri' => UriWithLengthBetween1And2048,
  ?'identity_source' => IdentitySourceList,
  ?'identity_validation_expression' => StringWithLengthBetween0And1024,
  ?'jwt_configuration' => JWTConfiguration,
  ?'name' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->authorizer_credentials_arn = $authorizer_credentials_arn ?? ;
    $this->authorizer_result_ttl_in_seconds = $authorizer_result_ttl_in_seconds ?? ;
    $this->authorizer_type = $authorizer_type ?? "";
    $this->authorizer_uri = $authorizer_uri ?? ;
    $this->identity_source = $identity_source ?? ;
    $this->identity_validation_expression = $identity_validation_expression ?? ;
    $this->jwt_configuration = $jwt_configuration ?? ;
    $this->name = $name ?? ;
  }
}

class UpdateAuthorizerRequest {
  public __string $api_id;
  public Arn $authorizer_credentials_arn;
  public __string $authorizer_id;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public AuthorizerType $authorizer_type;
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public IdentitySourceList $identity_source;
  public StringWithLengthBetween0And1024 $identity_validation_expression;
  public JWTConfiguration $jwt_configuration;
  public StringWithLengthBetween1And128 $name;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'authorizer_credentials_arn' => Arn,
  ?'authorizer_id' => __string,
  ?'authorizer_result_ttl_in_seconds' => IntegerWithLengthBetween0And3600,
  ?'authorizer_type' => AuthorizerType,
  ?'authorizer_uri' => UriWithLengthBetween1And2048,
  ?'identity_source' => IdentitySourceList,
  ?'identity_validation_expression' => StringWithLengthBetween0And1024,
  ?'jwt_configuration' => JWTConfiguration,
  ?'name' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->authorizer_credentials_arn = $authorizer_credentials_arn ?? ;
    $this->authorizer_id = $authorizer_id ?? ;
    $this->authorizer_result_ttl_in_seconds = $authorizer_result_ttl_in_seconds ?? ;
    $this->authorizer_type = $authorizer_type ?? "";
    $this->authorizer_uri = $authorizer_uri ?? ;
    $this->identity_source = $identity_source ?? ;
    $this->identity_validation_expression = $identity_validation_expression ?? ;
    $this->jwt_configuration = $jwt_configuration ?? ;
    $this->name = $name ?? ;
  }
}

class UpdateAuthorizerResponse {
  public Arn $authorizer_credentials_arn;
  public Id $authorizer_id;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public AuthorizerType $authorizer_type;
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public IdentitySourceList $identity_source;
  public StringWithLengthBetween0And1024 $identity_validation_expression;
  public JWTConfiguration $jwt_configuration;
  public StringWithLengthBetween1And128 $name;

  public function __construct(shape(
  ?'authorizer_credentials_arn' => Arn,
  ?'authorizer_id' => Id,
  ?'authorizer_result_ttl_in_seconds' => IntegerWithLengthBetween0And3600,
  ?'authorizer_type' => AuthorizerType,
  ?'authorizer_uri' => UriWithLengthBetween1And2048,
  ?'identity_source' => IdentitySourceList,
  ?'identity_validation_expression' => StringWithLengthBetween0And1024,
  ?'jwt_configuration' => JWTConfiguration,
  ?'name' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->authorizer_credentials_arn = $authorizer_credentials_arn ?? ;
    $this->authorizer_id = $authorizer_id ?? ;
    $this->authorizer_result_ttl_in_seconds = $authorizer_result_ttl_in_seconds ?? ;
    $this->authorizer_type = $authorizer_type ?? "";
    $this->authorizer_uri = $authorizer_uri ?? ;
    $this->identity_source = $identity_source ?? ;
    $this->identity_validation_expression = $identity_validation_expression ?? ;
    $this->jwt_configuration = $jwt_configuration ?? ;
    $this->name = $name ?? ;
  }
}

class UpdateDeploymentInput {
  public StringWithLengthBetween0And1024 $description;

  public function __construct(shape(
  ?'description' => StringWithLengthBetween0And1024,
  ) $s = shape()) {
    $this->description = $description ?? ;
  }
}

class UpdateDeploymentRequest {
  public __string $api_id;
  public __string $deployment_id;
  public StringWithLengthBetween0And1024 $description;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'deployment_id' => __string,
  ?'description' => StringWithLengthBetween0And1024,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->description = $description ?? ;
  }
}

class UpdateDeploymentResponse {
  public __boolean $auto_deployed;
  public __timestampIso8601 $created_date;
  public Id $deployment_id;
  public DeploymentStatus $deployment_status;
  public __string $deployment_status_message;
  public StringWithLengthBetween0And1024 $description;

  public function __construct(shape(
  ?'auto_deployed' => __boolean,
  ?'created_date' => __timestampIso8601,
  ?'deployment_id' => Id,
  ?'deployment_status' => DeploymentStatus,
  ?'deployment_status_message' => __string,
  ?'description' => StringWithLengthBetween0And1024,
  ) $s = shape()) {
    $this->auto_deployed = $auto_deployed ?? ;
    $this->created_date = $created_date ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->deployment_status = $deployment_status ?? "";
    $this->deployment_status_message = $deployment_status_message ?? ;
    $this->description = $description ?? ;
  }
}

class UpdateDomainNameInput {
  public DomainNameConfigurations $domain_name_configurations;

  public function __construct(shape(
  ?'domain_name_configurations' => DomainNameConfigurations,
  ) $s = shape()) {
    $this->domain_name_configurations = $domain_name_configurations ?? [];
  }
}

class UpdateDomainNameRequest {
  public __string $domain_name;
  public DomainNameConfigurations $domain_name_configurations;

  public function __construct(shape(
  ?'domain_name' => __string,
  ?'domain_name_configurations' => DomainNameConfigurations,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? null;
    $this->domain_name_configurations = $domain_name_configurations ?? [];
  }
}

class UpdateDomainNameResponse {
  public SelectionExpression $api_mapping_selection_expression;
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
  public Tags $tags;

  public function __construct(shape(
  ?'api_mapping_selection_expression' => SelectionExpression,
  ?'domain_name' => StringWithLengthBetween1And512,
  ?'domain_name_configurations' => DomainNameConfigurations,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->api_mapping_selection_expression = $api_mapping_selection_expression ?? ;
    $this->domain_name = $domain_name ?? null;
    $this->domain_name_configurations = $domain_name_configurations ?? [];
    $this->tags = $tags ?? [];
  }
}

class UpdateIntegrationInput {
  public StringWithLengthBetween1And1024 $connection_id;
  public ConnectionType $connection_type;
  public ContentHandlingStrategy $content_handling_strategy;
  public Arn $credentials_arn;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And64 $integration_method;
  public IntegrationType $integration_type;
  public UriWithLengthBetween1And2048 $integration_uri;
  public PassthroughBehavior $passthrough_behavior;
  public StringWithLengthBetween1And64 $payload_format_version;
  public IntegrationParameters $request_parameters;
  public TemplateMap $request_templates;
  public SelectionExpression $template_selection_expression;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public TlsConfigInput $tls_config;

  public function __construct(shape(
  ?'connection_id' => StringWithLengthBetween1And1024,
  ?'connection_type' => ConnectionType,
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'credentials_arn' => Arn,
  ?'description' => StringWithLengthBetween0And1024,
  ?'integration_method' => StringWithLengthBetween1And64,
  ?'integration_type' => IntegrationType,
  ?'integration_uri' => UriWithLengthBetween1And2048,
  ?'passthrough_behavior' => PassthroughBehavior,
  ?'payload_format_version' => StringWithLengthBetween1And64,
  ?'request_parameters' => IntegrationParameters,
  ?'request_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ?'timeout_in_millis' => IntegerWithLengthBetween50And30000,
  ?'tls_config' => TlsConfigInput,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? ;
    $this->connection_type = $connection_type ?? "";
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->credentials_arn = $credentials_arn ?? ;
    $this->description = $description ?? ;
    $this->integration_method = $integration_method ?? ;
    $this->integration_type = $integration_type ?? "";
    $this->integration_uri = $integration_uri ?? ;
    $this->passthrough_behavior = $passthrough_behavior ?? "";
    $this->payload_format_version = $payload_format_version ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->request_templates = $request_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
    $this->timeout_in_millis = $timeout_in_millis ?? ;
    $this->tls_config = $tls_config ?? null;
  }
}

class UpdateIntegrationRequest {
  public __string $api_id;
  public StringWithLengthBetween1And1024 $connection_id;
  public ConnectionType $connection_type;
  public ContentHandlingStrategy $content_handling_strategy;
  public Arn $credentials_arn;
  public StringWithLengthBetween0And1024 $description;
  public __string $integration_id;
  public StringWithLengthBetween1And64 $integration_method;
  public IntegrationType $integration_type;
  public UriWithLengthBetween1And2048 $integration_uri;
  public PassthroughBehavior $passthrough_behavior;
  public StringWithLengthBetween1And64 $payload_format_version;
  public IntegrationParameters $request_parameters;
  public TemplateMap $request_templates;
  public SelectionExpression $template_selection_expression;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public TlsConfigInput $tls_config;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'connection_id' => StringWithLengthBetween1And1024,
  ?'connection_type' => ConnectionType,
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'credentials_arn' => Arn,
  ?'description' => StringWithLengthBetween0And1024,
  ?'integration_id' => __string,
  ?'integration_method' => StringWithLengthBetween1And64,
  ?'integration_type' => IntegrationType,
  ?'integration_uri' => UriWithLengthBetween1And2048,
  ?'passthrough_behavior' => PassthroughBehavior,
  ?'payload_format_version' => StringWithLengthBetween1And64,
  ?'request_parameters' => IntegrationParameters,
  ?'request_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ?'timeout_in_millis' => IntegerWithLengthBetween50And30000,
  ?'tls_config' => TlsConfigInput,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->connection_id = $connection_id ?? ;
    $this->connection_type = $connection_type ?? "";
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->credentials_arn = $credentials_arn ?? ;
    $this->description = $description ?? ;
    $this->integration_id = $integration_id ?? ;
    $this->integration_method = $integration_method ?? ;
    $this->integration_type = $integration_type ?? "";
    $this->integration_uri = $integration_uri ?? ;
    $this->passthrough_behavior = $passthrough_behavior ?? "";
    $this->payload_format_version = $payload_format_version ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->request_templates = $request_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
    $this->timeout_in_millis = $timeout_in_millis ?? ;
    $this->tls_config = $tls_config ?? null;
  }
}

class UpdateIntegrationResponseInput {
  public ContentHandlingStrategy $content_handling_strategy;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;

  public function __construct(shape(
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'integration_response_key' => SelectionKey,
  ?'response_parameters' => IntegrationParameters,
  ?'response_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ) $s = shape()) {
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->integration_response_key = $integration_response_key ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->response_templates = $response_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
  }
}

class UpdateIntegrationResponseRequest {
  public __string $api_id;
  public ContentHandlingStrategy $content_handling_strategy;
  public __string $integration_id;
  public __string $integration_response_id;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'integration_id' => __string,
  ?'integration_response_id' => __string,
  ?'integration_response_key' => SelectionKey,
  ?'response_parameters' => IntegrationParameters,
  ?'response_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->integration_id = $integration_id ?? ;
    $this->integration_response_id = $integration_response_id ?? ;
    $this->integration_response_key = $integration_response_key ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->response_templates = $response_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
  }
}

class UpdateIntegrationResponseResponse {
  public ContentHandlingStrategy $content_handling_strategy;
  public Id $integration_response_id;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;

  public function __construct(shape(
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'integration_response_id' => Id,
  ?'integration_response_key' => SelectionKey,
  ?'response_parameters' => IntegrationParameters,
  ?'response_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ) $s = shape()) {
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->integration_response_id = $integration_response_id ?? ;
    $this->integration_response_key = $integration_response_key ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->response_templates = $response_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
  }
}

class UpdateIntegrationResult {
  public __boolean $api_gateway_managed;
  public StringWithLengthBetween1And1024 $connection_id;
  public ConnectionType $connection_type;
  public ContentHandlingStrategy $content_handling_strategy;
  public Arn $credentials_arn;
  public StringWithLengthBetween0And1024 $description;
  public Id $integration_id;
  public StringWithLengthBetween1And64 $integration_method;
  public SelectionExpression $integration_response_selection_expression;
  public IntegrationType $integration_type;
  public UriWithLengthBetween1And2048 $integration_uri;
  public PassthroughBehavior $passthrough_behavior;
  public StringWithLengthBetween1And64 $payload_format_version;
  public IntegrationParameters $request_parameters;
  public TemplateMap $request_templates;
  public SelectionExpression $template_selection_expression;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public TlsConfig $tls_config;

  public function __construct(shape(
  ?'api_gateway_managed' => __boolean,
  ?'connection_id' => StringWithLengthBetween1And1024,
  ?'connection_type' => ConnectionType,
  ?'content_handling_strategy' => ContentHandlingStrategy,
  ?'credentials_arn' => Arn,
  ?'description' => StringWithLengthBetween0And1024,
  ?'integration_id' => Id,
  ?'integration_method' => StringWithLengthBetween1And64,
  ?'integration_response_selection_expression' => SelectionExpression,
  ?'integration_type' => IntegrationType,
  ?'integration_uri' => UriWithLengthBetween1And2048,
  ?'passthrough_behavior' => PassthroughBehavior,
  ?'payload_format_version' => StringWithLengthBetween1And64,
  ?'request_parameters' => IntegrationParameters,
  ?'request_templates' => TemplateMap,
  ?'template_selection_expression' => SelectionExpression,
  ?'timeout_in_millis' => IntegerWithLengthBetween50And30000,
  ?'tls_config' => TlsConfig,
  ) $s = shape()) {
    $this->api_gateway_managed = $api_gateway_managed ?? ;
    $this->connection_id = $connection_id ?? ;
    $this->connection_type = $connection_type ?? "";
    $this->content_handling_strategy = $content_handling_strategy ?? "";
    $this->credentials_arn = $credentials_arn ?? ;
    $this->description = $description ?? ;
    $this->integration_id = $integration_id ?? ;
    $this->integration_method = $integration_method ?? ;
    $this->integration_response_selection_expression = $integration_response_selection_expression ?? ;
    $this->integration_type = $integration_type ?? "";
    $this->integration_uri = $integration_uri ?? ;
    $this->passthrough_behavior = $passthrough_behavior ?? "";
    $this->payload_format_version = $payload_format_version ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->request_templates = $request_templates ?? ;
    $this->template_selection_expression = $template_selection_expression ?? ;
    $this->timeout_in_millis = $timeout_in_millis ?? ;
    $this->tls_config = $tls_config ?? null;
  }
}

class UpdateModelInput {
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
  ?'content_type' => StringWithLengthBetween1And256,
  ?'description' => StringWithLengthBetween0And1024,
  ?'name' => StringWithLengthBetween1And128,
  ?'schema' => StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->content_type = $content_type ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->schema = $schema ?? ;
  }
}

class UpdateModelRequest {
  public __string $api_id;
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public __string $model_id;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'content_type' => StringWithLengthBetween1And256,
  ?'description' => StringWithLengthBetween0And1024,
  ?'model_id' => __string,
  ?'name' => StringWithLengthBetween1And128,
  ?'schema' => StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->content_type = $content_type ?? ;
    $this->description = $description ?? ;
    $this->model_id = $model_id ?? ;
    $this->name = $name ?? ;
    $this->schema = $schema ?? ;
  }
}

class UpdateModelResponse {
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public Id $model_id;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
  ?'content_type' => StringWithLengthBetween1And256,
  ?'description' => StringWithLengthBetween0And1024,
  ?'model_id' => Id,
  ?'name' => StringWithLengthBetween1And128,
  ?'schema' => StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->content_type = $content_type ?? ;
    $this->description = $description ?? ;
    $this->model_id = $model_id ?? ;
    $this->name = $name ?? ;
    $this->schema = $schema ?? ;
  }
}

class UpdateRouteInput {
  public __boolean $api_key_required;
  public AuthorizationScopes $authorization_scopes;
  public AuthorizationType $authorization_type;
  public Id $authorizer_id;
  public SelectionExpression $model_selection_expression;
  public StringWithLengthBetween1And64 $operation_name;
  public RouteModels $request_models;
  public RouteParameters $request_parameters;
  public SelectionKey $route_key;
  public SelectionExpression $route_response_selection_expression;
  public StringWithLengthBetween1And128 $target;

  public function __construct(shape(
  ?'api_key_required' => __boolean,
  ?'authorization_scopes' => AuthorizationScopes,
  ?'authorization_type' => AuthorizationType,
  ?'authorizer_id' => Id,
  ?'model_selection_expression' => SelectionExpression,
  ?'operation_name' => StringWithLengthBetween1And64,
  ?'request_models' => RouteModels,
  ?'request_parameters' => RouteParameters,
  ?'route_key' => SelectionKey,
  ?'route_response_selection_expression' => SelectionExpression,
  ?'target' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_key_required = $api_key_required ?? ;
    $this->authorization_scopes = $authorization_scopes ?? [];
    $this->authorization_type = $authorization_type ?? "";
    $this->authorizer_id = $authorizer_id ?? ;
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->operation_name = $operation_name ?? ;
    $this->request_models = $request_models ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->route_key = $route_key ?? ;
    $this->route_response_selection_expression = $route_response_selection_expression ?? ;
    $this->target = $target ?? ;
  }
}

class UpdateRouteRequest {
  public __string $api_id;
  public __boolean $api_key_required;
  public AuthorizationScopes $authorization_scopes;
  public AuthorizationType $authorization_type;
  public Id $authorizer_id;
  public SelectionExpression $model_selection_expression;
  public StringWithLengthBetween1And64 $operation_name;
  public RouteModels $request_models;
  public RouteParameters $request_parameters;
  public __string $route_id;
  public SelectionKey $route_key;
  public SelectionExpression $route_response_selection_expression;
  public StringWithLengthBetween1And128 $target;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'api_key_required' => __boolean,
  ?'authorization_scopes' => AuthorizationScopes,
  ?'authorization_type' => AuthorizationType,
  ?'authorizer_id' => Id,
  ?'model_selection_expression' => SelectionExpression,
  ?'operation_name' => StringWithLengthBetween1And64,
  ?'request_models' => RouteModels,
  ?'request_parameters' => RouteParameters,
  ?'route_id' => __string,
  ?'route_key' => SelectionKey,
  ?'route_response_selection_expression' => SelectionExpression,
  ?'target' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->api_key_required = $api_key_required ?? ;
    $this->authorization_scopes = $authorization_scopes ?? [];
    $this->authorization_type = $authorization_type ?? "";
    $this->authorizer_id = $authorizer_id ?? ;
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->operation_name = $operation_name ?? ;
    $this->request_models = $request_models ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->route_id = $route_id ?? ;
    $this->route_key = $route_key ?? ;
    $this->route_response_selection_expression = $route_response_selection_expression ?? ;
    $this->target = $target ?? ;
  }
}

class UpdateRouteResponseInput {
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public SelectionKey $route_response_key;

  public function __construct(shape(
  ?'model_selection_expression' => SelectionExpression,
  ?'response_models' => RouteModels,
  ?'response_parameters' => RouteParameters,
  ?'route_response_key' => SelectionKey,
  ) $s = shape()) {
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->response_models = $response_models ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->route_response_key = $route_response_key ?? ;
  }
}

class UpdateRouteResponseRequest {
  public __string $api_id;
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public __string $route_id;
  public __string $route_response_id;
  public SelectionKey $route_response_key;

  public function __construct(shape(
  ?'api_id' => __string,
  ?'model_selection_expression' => SelectionExpression,
  ?'response_models' => RouteModels,
  ?'response_parameters' => RouteParameters,
  ?'route_id' => __string,
  ?'route_response_id' => __string,
  ?'route_response_key' => SelectionKey,
  ) $s = shape()) {
    $this->api_id = $api_id ?? ;
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->response_models = $response_models ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->route_id = $route_id ?? ;
    $this->route_response_id = $route_response_id ?? ;
    $this->route_response_key = $route_response_key ?? ;
  }
}

class UpdateRouteResponseResponse {
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public Id $route_response_id;
  public SelectionKey $route_response_key;

  public function __construct(shape(
  ?'model_selection_expression' => SelectionExpression,
  ?'response_models' => RouteModels,
  ?'response_parameters' => RouteParameters,
  ?'route_response_id' => Id,
  ?'route_response_key' => SelectionKey,
  ) $s = shape()) {
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->response_models = $response_models ?? ;
    $this->response_parameters = $response_parameters ?? ;
    $this->route_response_id = $route_response_id ?? ;
    $this->route_response_key = $route_response_key ?? ;
  }
}

class UpdateRouteResult {
  public __boolean $api_gateway_managed;
  public __boolean $api_key_required;
  public AuthorizationScopes $authorization_scopes;
  public AuthorizationType $authorization_type;
  public Id $authorizer_id;
  public SelectionExpression $model_selection_expression;
  public StringWithLengthBetween1And64 $operation_name;
  public RouteModels $request_models;
  public RouteParameters $request_parameters;
  public Id $route_id;
  public SelectionKey $route_key;
  public SelectionExpression $route_response_selection_expression;
  public StringWithLengthBetween1And128 $target;

  public function __construct(shape(
  ?'api_gateway_managed' => __boolean,
  ?'api_key_required' => __boolean,
  ?'authorization_scopes' => AuthorizationScopes,
  ?'authorization_type' => AuthorizationType,
  ?'authorizer_id' => Id,
  ?'model_selection_expression' => SelectionExpression,
  ?'operation_name' => StringWithLengthBetween1And64,
  ?'request_models' => RouteModels,
  ?'request_parameters' => RouteParameters,
  ?'route_id' => Id,
  ?'route_key' => SelectionKey,
  ?'route_response_selection_expression' => SelectionExpression,
  ?'target' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_gateway_managed = $api_gateway_managed ?? ;
    $this->api_key_required = $api_key_required ?? ;
    $this->authorization_scopes = $authorization_scopes ?? [];
    $this->authorization_type = $authorization_type ?? "";
    $this->authorizer_id = $authorizer_id ?? ;
    $this->model_selection_expression = $model_selection_expression ?? ;
    $this->operation_name = $operation_name ?? ;
    $this->request_models = $request_models ?? ;
    $this->request_parameters = $request_parameters ?? ;
    $this->route_id = $route_id ?? ;
    $this->route_key = $route_key ?? ;
    $this->route_response_selection_expression = $route_response_selection_expression ?? ;
    $this->target = $target ?? ;
  }
}

class UpdateStageInput {
  public AccessLogSettings $access_log_settings;
  public __boolean $auto_deploy;
  public Id $client_certificate_id;
  public RouteSettings $default_route_settings;
  public Id $deployment_id;
  public StringWithLengthBetween0And1024 $description;
  public RouteSettingsMap $route_settings;
  public StageVariablesMap $stage_variables;

  public function __construct(shape(
  ?'access_log_settings' => AccessLogSettings,
  ?'auto_deploy' => __boolean,
  ?'client_certificate_id' => Id,
  ?'default_route_settings' => RouteSettings,
  ?'deployment_id' => Id,
  ?'description' => StringWithLengthBetween0And1024,
  ?'route_settings' => RouteSettingsMap,
  ?'stage_variables' => StageVariablesMap,
  ) $s = shape()) {
    $this->access_log_settings = $access_log_settings ?? null;
    $this->auto_deploy = $auto_deploy ?? ;
    $this->client_certificate_id = $client_certificate_id ?? ;
    $this->default_route_settings = $default_route_settings ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->description = $description ?? ;
    $this->route_settings = $route_settings ?? null;
    $this->stage_variables = $stage_variables ?? ;
  }
}

class UpdateStageRequest {
  public AccessLogSettings $access_log_settings;
  public __string $api_id;
  public __boolean $auto_deploy;
  public Id $client_certificate_id;
  public RouteSettings $default_route_settings;
  public Id $deployment_id;
  public StringWithLengthBetween0And1024 $description;
  public RouteSettingsMap $route_settings;
  public __string $stage_name;
  public StageVariablesMap $stage_variables;

  public function __construct(shape(
  ?'access_log_settings' => AccessLogSettings,
  ?'api_id' => __string,
  ?'auto_deploy' => __boolean,
  ?'client_certificate_id' => Id,
  ?'default_route_settings' => RouteSettings,
  ?'deployment_id' => Id,
  ?'description' => StringWithLengthBetween0And1024,
  ?'route_settings' => RouteSettingsMap,
  ?'stage_name' => __string,
  ?'stage_variables' => StageVariablesMap,
  ) $s = shape()) {
    $this->access_log_settings = $access_log_settings ?? null;
    $this->api_id = $api_id ?? ;
    $this->auto_deploy = $auto_deploy ?? ;
    $this->client_certificate_id = $client_certificate_id ?? ;
    $this->default_route_settings = $default_route_settings ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->description = $description ?? ;
    $this->route_settings = $route_settings ?? null;
    $this->stage_name = $stage_name ?? ;
    $this->stage_variables = $stage_variables ?? ;
  }
}

class UpdateStageResponse {
  public AccessLogSettings $access_log_settings;
  public __boolean $api_gateway_managed;
  public __boolean $auto_deploy;
  public Id $client_certificate_id;
  public __timestampIso8601 $created_date;
  public RouteSettings $default_route_settings;
  public Id $deployment_id;
  public StringWithLengthBetween0And1024 $description;
  public __string $last_deployment_status_message;
  public __timestampIso8601 $last_updated_date;
  public RouteSettingsMap $route_settings;
  public StringWithLengthBetween1And128 $stage_name;
  public StageVariablesMap $stage_variables;
  public Tags $tags;

  public function __construct(shape(
  ?'access_log_settings' => AccessLogSettings,
  ?'api_gateway_managed' => __boolean,
  ?'auto_deploy' => __boolean,
  ?'client_certificate_id' => Id,
  ?'created_date' => __timestampIso8601,
  ?'default_route_settings' => RouteSettings,
  ?'deployment_id' => Id,
  ?'description' => StringWithLengthBetween0And1024,
  ?'last_deployment_status_message' => __string,
  ?'last_updated_date' => __timestampIso8601,
  ?'route_settings' => RouteSettingsMap,
  ?'stage_name' => StringWithLengthBetween1And128,
  ?'stage_variables' => StageVariablesMap,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->access_log_settings = $access_log_settings ?? null;
    $this->api_gateway_managed = $api_gateway_managed ?? ;
    $this->auto_deploy = $auto_deploy ?? ;
    $this->client_certificate_id = $client_certificate_id ?? ;
    $this->created_date = $created_date ?? ;
    $this->default_route_settings = $default_route_settings ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->description = $description ?? ;
    $this->last_deployment_status_message = $last_deployment_status_message ?? ;
    $this->last_updated_date = $last_updated_date ?? ;
    $this->route_settings = $route_settings ?? null;
    $this->stage_name = $stage_name ?? ;
    $this->stage_variables = $stage_variables ?? ;
    $this->tags = $tags ?? [];
  }
}

class UpdateVpcLinkInput {
  public StringWithLengthBetween1And128 $name;

  public function __construct(shape(
  ?'name' => StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class UpdateVpcLinkRequest {
  public StringWithLengthBetween1And128 $name;
  public __string $vpc_link_id;

  public function __construct(shape(
  ?'name' => StringWithLengthBetween1And128,
  ?'vpc_link_id' => __string,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->vpc_link_id = $vpc_link_id ?? ;
  }
}

class UpdateVpcLinkResponse {
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween1And128 $name;
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
  public Tags $tags;
  public Id $vpc_link_id;
  public VpcLinkStatus $vpc_link_status;
  public StringWithLengthBetween0And1024 $vpc_link_status_message;
  public VpcLinkVersion $vpc_link_version;

  public function __construct(shape(
  ?'created_date' => __timestampIso8601,
  ?'name' => StringWithLengthBetween1And128,
  ?'security_group_ids' => SecurityGroupIdList,
  ?'subnet_ids' => SubnetIdList,
  ?'tags' => Tags,
  ?'vpc_link_id' => Id,
  ?'vpc_link_status' => VpcLinkStatus,
  ?'vpc_link_status_message' => StringWithLengthBetween0And1024,
  ?'vpc_link_version' => VpcLinkVersion,
  ) $s = shape()) {
    $this->created_date = $created_date ?? ;
    $this->name = $name ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
    $this->tags = $tags ?? [];
    $this->vpc_link_id = $vpc_link_id ?? ;
    $this->vpc_link_status = $vpc_link_status ?? "";
    $this->vpc_link_status_message = $vpc_link_status_message ?? ;
    $this->vpc_link_version = $vpc_link_version ?? "";
  }
}

type UriWithLengthBetween1And2048 = string;

class VpcLink {
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween1And128 $name;
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
  public Tags $tags;
  public Id $vpc_link_id;
  public VpcLinkStatus $vpc_link_status;
  public StringWithLengthBetween0And1024 $vpc_link_status_message;
  public VpcLinkVersion $vpc_link_version;

  public function __construct(shape(
  ?'created_date' => __timestampIso8601,
  ?'name' => StringWithLengthBetween1And128,
  ?'security_group_ids' => SecurityGroupIdList,
  ?'subnet_ids' => SubnetIdList,
  ?'tags' => Tags,
  ?'vpc_link_id' => Id,
  ?'vpc_link_status' => VpcLinkStatus,
  ?'vpc_link_status_message' => StringWithLengthBetween0And1024,
  ?'vpc_link_version' => VpcLinkVersion,
  ) $s = shape()) {
    $this->created_date = $created_date ?? ;
    $this->name = $name ?? ;
    $this->security_group_ids = $security_group_ids ?? ;
    $this->subnet_ids = $subnet_ids ?? ;
    $this->tags = $tags ?? [];
    $this->vpc_link_id = $vpc_link_id ?? ;
    $this->vpc_link_status = $vpc_link_status ?? "";
    $this->vpc_link_status_message = $vpc_link_status_message ?? ;
    $this->vpc_link_version = $vpc_link_version ?? "";
  }
}

type VpcLinkStatus = string;

type VpcLinkVersion = string;

class VpcLinks {
  public __listOfVpcLink $items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'items' => __listOfVpcLink,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->items = $items ?? ;
    $this->next_token = $next_token ?? "";
  }
}

type __boolean = bool;

type __double = float;

type __integer = int;

type __listOfApi = vec<Api>;

type __listOfApiMapping = vec<ApiMapping>;

type __listOfAuthorizer = vec<Authorizer>;

type __listOfDeployment = vec<Deployment>;

type __listOfDomainName = vec<DomainName>;

type __listOfIntegration = vec<Integration>;

type __listOfIntegrationResponse = vec<IntegrationResponse>;

type __listOfModel = vec<Model>;

type __listOfRoute = vec<Route>;

type __listOfRouteResponse = vec<RouteResponse>;

type __listOfStage = vec<Stage>;

type __listOfVpcLink = vec<VpcLink>;

type __listOf__string = vec<__string>;

type __long = int;

type __string = string;

type __timestampIso8601 = int;

type __timestampUnix = int;

