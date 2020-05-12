<?hh // strict
namespace slack\aws\apigateway;

interface ApiGatewayV2 {
  public function CreateApi(CreateApiRequest $in): Awaitable<\Errors\Result<CreateApiResponse>>;
  public function CreateApiMapping(CreateApiMappingRequest $in): Awaitable<\Errors\Result<CreateApiMappingResponse>>;
  public function CreateAuthorizer(CreateAuthorizerRequest $in): Awaitable<\Errors\Result<CreateAuthorizerResponse>>;
  public function CreateDeployment(CreateDeploymentRequest $in): Awaitable<\Errors\Result<CreateDeploymentResponse>>;
  public function CreateDomainName(CreateDomainNameRequest $in): Awaitable<\Errors\Result<CreateDomainNameResponse>>;
  public function CreateIntegration(CreateIntegrationRequest $in): Awaitable<\Errors\Result<CreateIntegrationResult>>;
  public function CreateIntegrationResponse(CreateIntegrationResponseRequest $in): Awaitable<\Errors\Result<CreateIntegrationResponseResponse>>;
  public function CreateModel(CreateModelRequest $in): Awaitable<\Errors\Result<CreateModelResponse>>;
  public function CreateRoute(CreateRouteRequest $in): Awaitable<\Errors\Result<CreateRouteResult>>;
  public function CreateRouteResponse(CreateRouteResponseRequest $in): Awaitable<\Errors\Result<CreateRouteResponseResponse>>;
  public function CreateStage(CreateStageRequest $in): Awaitable<\Errors\Result<CreateStageResponse>>;
  public function CreateVpcLink(CreateVpcLinkRequest $in): Awaitable<\Errors\Result<CreateVpcLinkResponse>>;
  public function DeleteAccessLogSettings(DeleteAccessLogSettingsRequest $in): Awaitable<\Errors\Error>;
  public function DeleteApi(DeleteApiRequest $in): Awaitable<\Errors\Error>;
  public function DeleteApiMapping(DeleteApiMappingRequest $in): Awaitable<\Errors\Error>;
  public function DeleteAuthorizer(DeleteAuthorizerRequest $in): Awaitable<\Errors\Error>;
  public function DeleteCorsConfiguration(DeleteCorsConfigurationRequest $in): Awaitable<\Errors\Error>;
  public function DeleteDeployment(DeleteDeploymentRequest $in): Awaitable<\Errors\Error>;
  public function DeleteDomainName(DeleteDomainNameRequest $in): Awaitable<\Errors\Error>;
  public function DeleteIntegration(DeleteIntegrationRequest $in): Awaitable<\Errors\Error>;
  public function DeleteIntegrationResponse(DeleteIntegrationResponseRequest $in): Awaitable<\Errors\Error>;
  public function DeleteModel(DeleteModelRequest $in): Awaitable<\Errors\Error>;
  public function DeleteRoute(DeleteRouteRequest $in): Awaitable<\Errors\Error>;
  public function DeleteRouteRequestParameter(DeleteRouteRequestParameterRequest $in): Awaitable<\Errors\Error>;
  public function DeleteRouteResponse(DeleteRouteResponseRequest $in): Awaitable<\Errors\Error>;
  public function DeleteRouteSettings(DeleteRouteSettingsRequest $in): Awaitable<\Errors\Error>;
  public function DeleteStage(DeleteStageRequest $in): Awaitable<\Errors\Error>;
  public function DeleteVpcLink(DeleteVpcLinkRequest $in): Awaitable<\Errors\Result<DeleteVpcLinkResponse>>;
  public function ExportApi(ExportApiRequest $in): Awaitable<\Errors\Result<ExportApiResponse>>;
  public function GetApi(GetApiRequest $in): Awaitable<\Errors\Result<GetApiResponse>>;
  public function GetApiMapping(GetApiMappingRequest $in): Awaitable<\Errors\Result<GetApiMappingResponse>>;
  public function GetApiMappings(GetApiMappingsRequest $in): Awaitable<\Errors\Result<GetApiMappingsResponse>>;
  public function GetApis(GetApisRequest $in): Awaitable<\Errors\Result<GetApisResponse>>;
  public function GetAuthorizer(GetAuthorizerRequest $in): Awaitable<\Errors\Result<GetAuthorizerResponse>>;
  public function GetAuthorizers(GetAuthorizersRequest $in): Awaitable<\Errors\Result<GetAuthorizersResponse>>;
  public function GetDeployment(GetDeploymentRequest $in): Awaitable<\Errors\Result<GetDeploymentResponse>>;
  public function GetDeployments(GetDeploymentsRequest $in): Awaitable<\Errors\Result<GetDeploymentsResponse>>;
  public function GetDomainName(GetDomainNameRequest $in): Awaitable<\Errors\Result<GetDomainNameResponse>>;
  public function GetDomainNames(GetDomainNamesRequest $in): Awaitable<\Errors\Result<GetDomainNamesResponse>>;
  public function GetIntegration(GetIntegrationRequest $in): Awaitable<\Errors\Result<GetIntegrationResult>>;
  public function GetIntegrationResponse(GetIntegrationResponseRequest $in): Awaitable<\Errors\Result<GetIntegrationResponseResponse>>;
  public function GetIntegrationResponses(GetIntegrationResponsesRequest $in): Awaitable<\Errors\Result<GetIntegrationResponsesResponse>>;
  public function GetIntegrations(GetIntegrationsRequest $in): Awaitable<\Errors\Result<GetIntegrationsResponse>>;
  public function GetModel(GetModelRequest $in): Awaitable<\Errors\Result<GetModelResponse>>;
  public function GetModelTemplate(GetModelTemplateRequest $in): Awaitable<\Errors\Result<GetModelTemplateResponse>>;
  public function GetModels(GetModelsRequest $in): Awaitable<\Errors\Result<GetModelsResponse>>;
  public function GetRoute(GetRouteRequest $in): Awaitable<\Errors\Result<GetRouteResult>>;
  public function GetRouteResponse(GetRouteResponseRequest $in): Awaitable<\Errors\Result<GetRouteResponseResponse>>;
  public function GetRouteResponses(GetRouteResponsesRequest $in): Awaitable<\Errors\Result<GetRouteResponsesResponse>>;
  public function GetRoutes(GetRoutesRequest $in): Awaitable<\Errors\Result<GetRoutesResponse>>;
  public function GetStage(GetStageRequest $in): Awaitable<\Errors\Result<GetStageResponse>>;
  public function GetStages(GetStagesRequest $in): Awaitable<\Errors\Result<GetStagesResponse>>;
  public function GetTags(GetTagsRequest $in): Awaitable<\Errors\Result<GetTagsResponse>>;
  public function GetVpcLink(GetVpcLinkRequest $in): Awaitable<\Errors\Result<GetVpcLinkResponse>>;
  public function GetVpcLinks(GetVpcLinksRequest $in): Awaitable<\Errors\Result<GetVpcLinksResponse>>;
  public function ImportApi(ImportApiRequest $in): Awaitable<\Errors\Result<ImportApiResponse>>;
  public function ReimportApi(ReimportApiRequest $in): Awaitable<\Errors\Result<ReimportApiResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UpdateApi(UpdateApiRequest $in): Awaitable<\Errors\Result<UpdateApiResponse>>;
  public function UpdateApiMapping(UpdateApiMappingRequest $in): Awaitable<\Errors\Result<UpdateApiMappingResponse>>;
  public function UpdateAuthorizer(UpdateAuthorizerRequest $in): Awaitable<\Errors\Result<UpdateAuthorizerResponse>>;
  public function UpdateDeployment(UpdateDeploymentRequest $in): Awaitable<\Errors\Result<UpdateDeploymentResponse>>;
  public function UpdateDomainName(UpdateDomainNameRequest $in): Awaitable<\Errors\Result<UpdateDomainNameResponse>>;
  public function UpdateIntegration(UpdateIntegrationRequest $in): Awaitable<\Errors\Result<UpdateIntegrationResult>>;
  public function UpdateIntegrationResponse(UpdateIntegrationResponseRequest $in): Awaitable<\Errors\Result<UpdateIntegrationResponseResponse>>;
  public function UpdateModel(UpdateModelRequest $in): Awaitable<\Errors\Result<UpdateModelResponse>>;
  public function UpdateRoute(UpdateRouteRequest $in): Awaitable<\Errors\Result<UpdateRouteResult>>;
  public function UpdateRouteResponse(UpdateRouteResponseRequest $in): Awaitable<\Errors\Result<UpdateRouteResponseResponse>>;
  public function UpdateStage(UpdateStageRequest $in): Awaitable<\Errors\Result<UpdateStageResponse>>;
  public function UpdateVpcLink(UpdateVpcLinkRequest $in): Awaitable<\Errors\Result<UpdateVpcLinkResponse>>;
}

class AccessDeniedException {
  public ?__string $message;

  public function __construct(shape(
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class AccessLogSettings {
  public ?Arn $destination_arn;
  public ?StringWithLengthBetween1And1024 $format;

  public function __construct(shape(
    ?'destination_arn' => ?Arn,
    ?'format' => ?StringWithLengthBetween1And1024,
  ) $s = shape()) {
    $this->destination_arn = $s['destination_arn'] ?? '';
    $this->format = $s['format'] ?? '';
  }
}

class Api {
  public ?__string $api_endpoint;
  public ?Id $api_id;
  public ?SelectionExpression $api_key_selection_expression;
  public ?Cors $cors_configuration;
  public ?__timestampIso8601 $created_date;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__boolean $disable_schema_validation;
  public ?__listOf__string $import_info;
  public ?StringWithLengthBetween1And128 $name;
  public ?ProtocolType $protocol_type;
  public ?SelectionExpression $route_selection_expression;
  public ?Tags $tags;
  public ?StringWithLengthBetween1And64 $version;
  public ?__listOf__string $warnings;

  public function __construct(shape(
    ?'api_endpoint' => ?__string,
    ?'api_id' => ?Id,
    ?'api_key_selection_expression' => ?SelectionExpression,
    ?'cors_configuration' => ?Cors,
    ?'created_date' => ?__timestampIso8601,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'disable_schema_validation' => ?__boolean,
    ?'import_info' => ?__listOf__string,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'protocol_type' => ?ProtocolType,
    ?'route_selection_expression' => ?SelectionExpression,
    ?'tags' => ?Tags,
    ?'version' => ?StringWithLengthBetween1And64,
    ?'warnings' => ?__listOf__string,
  ) $s = shape()) {
    $this->api_endpoint = $s['api_endpoint'] ?? '';
    $this->api_id = $s['api_id'] ?? '';
    $this->api_key_selection_expression = $s['api_key_selection_expression'] ?? '';
    $this->cors_configuration = $s['cors_configuration'] ?? null;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->disable_schema_validation = $s['disable_schema_validation'] ?? false;
    $this->import_info = $s['import_info'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->protocol_type = $s['protocol_type'] ?? '';
    $this->route_selection_expression = $s['route_selection_expression'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->version = $s['version'] ?? '';
    $this->warnings = $s['warnings'] ?? vec[];
  }
}

class ApiMapping {
  public ?Id $api_id;
  public ?Id $api_mapping_id;
  public ?SelectionKey $api_mapping_key;
  public ?StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
    ?'api_id' => ?Id,
    ?'api_mapping_id' => ?Id,
    ?'api_mapping_key' => ?SelectionKey,
    ?'stage' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->api_mapping_id = $s['api_mapping_id'] ?? '';
    $this->api_mapping_key = $s['api_mapping_key'] ?? '';
    $this->stage = $s['stage'] ?? '';
  }
}

class ApiMappings {
  public ?__listOfApiMapping $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfApiMapping,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class Apis {
  public ?__listOfApi $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfApi,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type Arn = string;

type AuthorizationScopes = vec<StringWithLengthBetween1And64>;

type AuthorizationType = string;

class Authorizer {
  public ?Arn $authorizer_credentials_arn;
  public ?Id $authorizer_id;
  public ?IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public ?AuthorizerType $authorizer_type;
  public ?UriWithLengthBetween1And2048 $authorizer_uri;
  public ?IdentitySourceList $identity_source;
  public ?StringWithLengthBetween0And1024 $identity_validation_expression;
  public ?JWTConfiguration $jwt_configuration;
  public ?StringWithLengthBetween1And128 $name;

  public function __construct(shape(
    ?'authorizer_credentials_arn' => ?Arn,
    ?'authorizer_id' => ?Id,
    ?'authorizer_result_ttl_in_seconds' => ?IntegerWithLengthBetween0And3600,
    ?'authorizer_type' => ?AuthorizerType,
    ?'authorizer_uri' => ?UriWithLengthBetween1And2048,
    ?'identity_source' => ?IdentitySourceList,
    ?'identity_validation_expression' => ?StringWithLengthBetween0And1024,
    ?'jwt_configuration' => ?JWTConfiguration,
    ?'name' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->authorizer_credentials_arn = $s['authorizer_credentials_arn'] ?? '';
    $this->authorizer_id = $s['authorizer_id'] ?? '';
    $this->authorizer_result_ttl_in_seconds = $s['authorizer_result_ttl_in_seconds'] ?? 0;
    $this->authorizer_type = $s['authorizer_type'] ?? '';
    $this->authorizer_uri = $s['authorizer_uri'] ?? '';
    $this->identity_source = $s['identity_source'] ?? vec[];
    $this->identity_validation_expression = $s['identity_validation_expression'] ?? '';
    $this->jwt_configuration = $s['jwt_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

type AuthorizerType = string;

class Authorizers {
  public ?__listOfAuthorizer $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfAuthorizer,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class BadRequestException {
  public ?__string $message;

  public function __construct(shape(
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ConflictException {
  public ?__string $message;

  public function __construct(shape(
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ConnectionType = string;

type ContentHandlingStrategy = string;

class Cors {
  public ?__boolean $allow_credentials;
  public ?CorsHeaderList $allow_headers;
  public ?CorsMethodList $allow_methods;
  public ?CorsOriginList $allow_origins;
  public ?CorsHeaderList $expose_headers;
  public ?IntegerWithLengthBetweenMinus1And86400 $max_age;

  public function __construct(shape(
    ?'allow_credentials' => ?__boolean,
    ?'allow_headers' => ?CorsHeaderList,
    ?'allow_methods' => ?CorsMethodList,
    ?'allow_origins' => ?CorsOriginList,
    ?'expose_headers' => ?CorsHeaderList,
    ?'max_age' => ?IntegerWithLengthBetweenMinus1And86400,
  ) $s = shape()) {
    $this->allow_credentials = $s['allow_credentials'] ?? false;
    $this->allow_headers = $s['allow_headers'] ?? vec[];
    $this->allow_methods = $s['allow_methods'] ?? vec[];
    $this->allow_origins = $s['allow_origins'] ?? vec[];
    $this->expose_headers = $s['expose_headers'] ?? vec[];
    $this->max_age = $s['max_age'] ?? 0;
  }
}

type CorsHeaderList = vec<__string>;

type CorsMethodList = vec<StringWithLengthBetween1And64>;

type CorsOriginList = vec<__string>;

class CreateApiInput {
  public ?SelectionExpression $api_key_selection_expression;
  public ?Cors $cors_configuration;
  public ?Arn $credentials_arn;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__boolean $disable_schema_validation;
  public ?StringWithLengthBetween1And128 $name;
  public ?ProtocolType $protocol_type;
  public ?SelectionKey $route_key;
  public ?SelectionExpression $route_selection_expression;
  public ?Tags $tags;
  public ?UriWithLengthBetween1And2048 $target;
  public ?StringWithLengthBetween1And64 $version;

  public function __construct(shape(
    ?'api_key_selection_expression' => ?SelectionExpression,
    ?'cors_configuration' => ?Cors,
    ?'credentials_arn' => ?Arn,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'disable_schema_validation' => ?__boolean,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'protocol_type' => ?ProtocolType,
    ?'route_key' => ?SelectionKey,
    ?'route_selection_expression' => ?SelectionExpression,
    ?'tags' => ?Tags,
    ?'target' => ?UriWithLengthBetween1And2048,
    ?'version' => ?StringWithLengthBetween1And64,
  ) $s = shape()) {
    $this->api_key_selection_expression = $s['api_key_selection_expression'] ?? '';
    $this->cors_configuration = $s['cors_configuration'] ?? null;
    $this->credentials_arn = $s['credentials_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->disable_schema_validation = $s['disable_schema_validation'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->protocol_type = $s['protocol_type'] ?? '';
    $this->route_key = $s['route_key'] ?? '';
    $this->route_selection_expression = $s['route_selection_expression'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->target = $s['target'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class CreateApiMappingInput {
  public ?Id $api_id;
  public ?SelectionKey $api_mapping_key;
  public ?StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
    ?'api_id' => ?Id,
    ?'api_mapping_key' => ?SelectionKey,
    ?'stage' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->api_mapping_key = $s['api_mapping_key'] ?? '';
    $this->stage = $s['stage'] ?? '';
  }
}

class CreateApiMappingRequest {
  public ?Id $api_id;
  public ?SelectionKey $api_mapping_key;
  public ?__string $domain_name;
  public ?StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
    ?'api_id' => ?Id,
    ?'api_mapping_key' => ?SelectionKey,
    ?'domain_name' => ?__string,
    ?'stage' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->api_mapping_key = $s['api_mapping_key'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->stage = $s['stage'] ?? '';
  }
}

class CreateApiMappingResponse {
  public ?Id $api_id;
  public ?Id $api_mapping_id;
  public ?SelectionKey $api_mapping_key;
  public ?StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
    ?'api_id' => ?Id,
    ?'api_mapping_id' => ?Id,
    ?'api_mapping_key' => ?SelectionKey,
    ?'stage' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->api_mapping_id = $s['api_mapping_id'] ?? '';
    $this->api_mapping_key = $s['api_mapping_key'] ?? '';
    $this->stage = $s['stage'] ?? '';
  }
}

class CreateApiRequest {
  public ?SelectionExpression $api_key_selection_expression;
  public ?Cors $cors_configuration;
  public ?Arn $credentials_arn;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__boolean $disable_schema_validation;
  public ?StringWithLengthBetween1And128 $name;
  public ?ProtocolType $protocol_type;
  public ?SelectionKey $route_key;
  public ?SelectionExpression $route_selection_expression;
  public ?Tags $tags;
  public ?UriWithLengthBetween1And2048 $target;
  public ?StringWithLengthBetween1And64 $version;

  public function __construct(shape(
    ?'api_key_selection_expression' => ?SelectionExpression,
    ?'cors_configuration' => ?Cors,
    ?'credentials_arn' => ?Arn,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'disable_schema_validation' => ?__boolean,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'protocol_type' => ?ProtocolType,
    ?'route_key' => ?SelectionKey,
    ?'route_selection_expression' => ?SelectionExpression,
    ?'tags' => ?Tags,
    ?'target' => ?UriWithLengthBetween1And2048,
    ?'version' => ?StringWithLengthBetween1And64,
  ) $s = shape()) {
    $this->api_key_selection_expression = $s['api_key_selection_expression'] ?? '';
    $this->cors_configuration = $s['cors_configuration'] ?? null;
    $this->credentials_arn = $s['credentials_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->disable_schema_validation = $s['disable_schema_validation'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->protocol_type = $s['protocol_type'] ?? '';
    $this->route_key = $s['route_key'] ?? '';
    $this->route_selection_expression = $s['route_selection_expression'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->target = $s['target'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class CreateApiResponse {
  public ?__string $api_endpoint;
  public ?Id $api_id;
  public ?SelectionExpression $api_key_selection_expression;
  public ?Cors $cors_configuration;
  public ?__timestampIso8601 $created_date;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__boolean $disable_schema_validation;
  public ?__listOf__string $import_info;
  public ?StringWithLengthBetween1And128 $name;
  public ?ProtocolType $protocol_type;
  public ?SelectionExpression $route_selection_expression;
  public ?Tags $tags;
  public ?StringWithLengthBetween1And64 $version;
  public ?__listOf__string $warnings;

  public function __construct(shape(
    ?'api_endpoint' => ?__string,
    ?'api_id' => ?Id,
    ?'api_key_selection_expression' => ?SelectionExpression,
    ?'cors_configuration' => ?Cors,
    ?'created_date' => ?__timestampIso8601,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'disable_schema_validation' => ?__boolean,
    ?'import_info' => ?__listOf__string,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'protocol_type' => ?ProtocolType,
    ?'route_selection_expression' => ?SelectionExpression,
    ?'tags' => ?Tags,
    ?'version' => ?StringWithLengthBetween1And64,
    ?'warnings' => ?__listOf__string,
  ) $s = shape()) {
    $this->api_endpoint = $s['api_endpoint'] ?? '';
    $this->api_id = $s['api_id'] ?? '';
    $this->api_key_selection_expression = $s['api_key_selection_expression'] ?? '';
    $this->cors_configuration = $s['cors_configuration'] ?? null;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->disable_schema_validation = $s['disable_schema_validation'] ?? false;
    $this->import_info = $s['import_info'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->protocol_type = $s['protocol_type'] ?? '';
    $this->route_selection_expression = $s['route_selection_expression'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->version = $s['version'] ?? '';
    $this->warnings = $s['warnings'] ?? vec[];
  }
}

class CreateAuthorizerInput {
  public ?Arn $authorizer_credentials_arn;
  public ?IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public ?AuthorizerType $authorizer_type;
  public ?UriWithLengthBetween1And2048 $authorizer_uri;
  public ?IdentitySourceList $identity_source;
  public ?StringWithLengthBetween0And1024 $identity_validation_expression;
  public ?JWTConfiguration $jwt_configuration;
  public ?StringWithLengthBetween1And128 $name;

  public function __construct(shape(
    ?'authorizer_credentials_arn' => ?Arn,
    ?'authorizer_result_ttl_in_seconds' => ?IntegerWithLengthBetween0And3600,
    ?'authorizer_type' => ?AuthorizerType,
    ?'authorizer_uri' => ?UriWithLengthBetween1And2048,
    ?'identity_source' => ?IdentitySourceList,
    ?'identity_validation_expression' => ?StringWithLengthBetween0And1024,
    ?'jwt_configuration' => ?JWTConfiguration,
    ?'name' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->authorizer_credentials_arn = $s['authorizer_credentials_arn'] ?? '';
    $this->authorizer_result_ttl_in_seconds = $s['authorizer_result_ttl_in_seconds'] ?? 0;
    $this->authorizer_type = $s['authorizer_type'] ?? '';
    $this->authorizer_uri = $s['authorizer_uri'] ?? '';
    $this->identity_source = $s['identity_source'] ?? vec[];
    $this->identity_validation_expression = $s['identity_validation_expression'] ?? '';
    $this->jwt_configuration = $s['jwt_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

class CreateAuthorizerRequest {
  public ?__string $api_id;
  public ?Arn $authorizer_credentials_arn;
  public ?IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public ?AuthorizerType $authorizer_type;
  public ?UriWithLengthBetween1And2048 $authorizer_uri;
  public ?IdentitySourceList $identity_source;
  public ?StringWithLengthBetween0And1024 $identity_validation_expression;
  public ?JWTConfiguration $jwt_configuration;
  public ?StringWithLengthBetween1And128 $name;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'authorizer_credentials_arn' => ?Arn,
    ?'authorizer_result_ttl_in_seconds' => ?IntegerWithLengthBetween0And3600,
    ?'authorizer_type' => ?AuthorizerType,
    ?'authorizer_uri' => ?UriWithLengthBetween1And2048,
    ?'identity_source' => ?IdentitySourceList,
    ?'identity_validation_expression' => ?StringWithLengthBetween0And1024,
    ?'jwt_configuration' => ?JWTConfiguration,
    ?'name' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->authorizer_credentials_arn = $s['authorizer_credentials_arn'] ?? '';
    $this->authorizer_result_ttl_in_seconds = $s['authorizer_result_ttl_in_seconds'] ?? 0;
    $this->authorizer_type = $s['authorizer_type'] ?? '';
    $this->authorizer_uri = $s['authorizer_uri'] ?? '';
    $this->identity_source = $s['identity_source'] ?? vec[];
    $this->identity_validation_expression = $s['identity_validation_expression'] ?? '';
    $this->jwt_configuration = $s['jwt_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

class CreateAuthorizerResponse {
  public ?Arn $authorizer_credentials_arn;
  public ?Id $authorizer_id;
  public ?IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public ?AuthorizerType $authorizer_type;
  public ?UriWithLengthBetween1And2048 $authorizer_uri;
  public ?IdentitySourceList $identity_source;
  public ?StringWithLengthBetween0And1024 $identity_validation_expression;
  public ?JWTConfiguration $jwt_configuration;
  public ?StringWithLengthBetween1And128 $name;

  public function __construct(shape(
    ?'authorizer_credentials_arn' => ?Arn,
    ?'authorizer_id' => ?Id,
    ?'authorizer_result_ttl_in_seconds' => ?IntegerWithLengthBetween0And3600,
    ?'authorizer_type' => ?AuthorizerType,
    ?'authorizer_uri' => ?UriWithLengthBetween1And2048,
    ?'identity_source' => ?IdentitySourceList,
    ?'identity_validation_expression' => ?StringWithLengthBetween0And1024,
    ?'jwt_configuration' => ?JWTConfiguration,
    ?'name' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->authorizer_credentials_arn = $s['authorizer_credentials_arn'] ?? '';
    $this->authorizer_id = $s['authorizer_id'] ?? '';
    $this->authorizer_result_ttl_in_seconds = $s['authorizer_result_ttl_in_seconds'] ?? 0;
    $this->authorizer_type = $s['authorizer_type'] ?? '';
    $this->authorizer_uri = $s['authorizer_uri'] ?? '';
    $this->identity_source = $s['identity_source'] ?? vec[];
    $this->identity_validation_expression = $s['identity_validation_expression'] ?? '';
    $this->jwt_configuration = $s['jwt_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

class CreateDeploymentInput {
  public ?StringWithLengthBetween0And1024 $description;
  public ?StringWithLengthBetween1And128 $stage_name;

  public function __construct(shape(
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'stage_name' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->stage_name = $s['stage_name'] ?? '';
  }
}

class CreateDeploymentRequest {
  public ?__string $api_id;
  public ?StringWithLengthBetween0And1024 $description;
  public ?StringWithLengthBetween1And128 $stage_name;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'stage_name' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->stage_name = $s['stage_name'] ?? '';
  }
}

class CreateDeploymentResponse {
  public ?__boolean $auto_deployed;
  public ?__timestampIso8601 $created_date;
  public ?Id $deployment_id;
  public ?DeploymentStatus $deployment_status;
  public ?__string $deployment_status_message;
  public ?StringWithLengthBetween0And1024 $description;

  public function __construct(shape(
    ?'auto_deployed' => ?__boolean,
    ?'created_date' => ?__timestampIso8601,
    ?'deployment_id' => ?Id,
    ?'deployment_status' => ?DeploymentStatus,
    ?'deployment_status_message' => ?__string,
    ?'description' => ?StringWithLengthBetween0And1024,
  ) $s = shape()) {
    $this->auto_deployed = $s['auto_deployed'] ?? false;
    $this->created_date = $s['created_date'] ?? 0;
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->deployment_status = $s['deployment_status'] ?? '';
    $this->deployment_status_message = $s['deployment_status_message'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

class CreateDomainNameInput {
  public ?StringWithLengthBetween1And512 $domain_name;
  public ?DomainNameConfigurations $domain_name_configurations;
  public ?Tags $tags;

  public function __construct(shape(
    ?'domain_name' => ?StringWithLengthBetween1And512,
    ?'domain_name_configurations' => ?DomainNameConfigurations,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->domain_name_configurations = $s['domain_name_configurations'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateDomainNameRequest {
  public ?StringWithLengthBetween1And512 $domain_name;
  public ?DomainNameConfigurations $domain_name_configurations;
  public ?Tags $tags;

  public function __construct(shape(
    ?'domain_name' => ?StringWithLengthBetween1And512,
    ?'domain_name_configurations' => ?DomainNameConfigurations,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->domain_name_configurations = $s['domain_name_configurations'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateDomainNameResponse {
  public ?SelectionExpression $api_mapping_selection_expression;
  public ?StringWithLengthBetween1And512 $domain_name;
  public ?DomainNameConfigurations $domain_name_configurations;
  public ?Tags $tags;

  public function __construct(shape(
    ?'api_mapping_selection_expression' => ?SelectionExpression,
    ?'domain_name' => ?StringWithLengthBetween1And512,
    ?'domain_name_configurations' => ?DomainNameConfigurations,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->api_mapping_selection_expression = $s['api_mapping_selection_expression'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->domain_name_configurations = $s['domain_name_configurations'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateIntegrationInput {
  public ?StringWithLengthBetween1And1024 $connection_id;
  public ?ConnectionType $connection_type;
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?Arn $credentials_arn;
  public ?StringWithLengthBetween0And1024 $description;
  public ?StringWithLengthBetween1And64 $integration_method;
  public ?IntegrationType $integration_type;
  public ?UriWithLengthBetween1And2048 $integration_uri;
  public ?PassthroughBehavior $passthrough_behavior;
  public ?StringWithLengthBetween1And64 $payload_format_version;
  public ?IntegrationParameters $request_parameters;
  public ?TemplateMap $request_templates;
  public ?SelectionExpression $template_selection_expression;
  public ?IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public ?TlsConfigInput $tls_config;

  public function __construct(shape(
    ?'connection_id' => ?StringWithLengthBetween1And1024,
    ?'connection_type' => ?ConnectionType,
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'credentials_arn' => ?Arn,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'integration_method' => ?StringWithLengthBetween1And64,
    ?'integration_type' => ?IntegrationType,
    ?'integration_uri' => ?UriWithLengthBetween1And2048,
    ?'passthrough_behavior' => ?PassthroughBehavior,
    ?'payload_format_version' => ?StringWithLengthBetween1And64,
    ?'request_parameters' => ?IntegrationParameters,
    ?'request_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
    ?'timeout_in_millis' => ?IntegerWithLengthBetween50And30000,
    ?'tls_config' => ?TlsConfigInput,
  ) $s = shape()) {
    $this->connection_id = $s['connection_id'] ?? '';
    $this->connection_type = $s['connection_type'] ?? '';
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->credentials_arn = $s['credentials_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->integration_method = $s['integration_method'] ?? '';
    $this->integration_type = $s['integration_type'] ?? '';
    $this->integration_uri = $s['integration_uri'] ?? '';
    $this->passthrough_behavior = $s['passthrough_behavior'] ?? '';
    $this->payload_format_version = $s['payload_format_version'] ?? '';
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->request_templates = $s['request_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
    $this->timeout_in_millis = $s['timeout_in_millis'] ?? 0;
    $this->tls_config = $s['tls_config'] ?? null;
  }
}

class CreateIntegrationRequest {
  public ?__string $api_id;
  public ?StringWithLengthBetween1And1024 $connection_id;
  public ?ConnectionType $connection_type;
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?Arn $credentials_arn;
  public ?StringWithLengthBetween0And1024 $description;
  public ?StringWithLengthBetween1And64 $integration_method;
  public ?IntegrationType $integration_type;
  public ?UriWithLengthBetween1And2048 $integration_uri;
  public ?PassthroughBehavior $passthrough_behavior;
  public ?StringWithLengthBetween1And64 $payload_format_version;
  public ?IntegrationParameters $request_parameters;
  public ?TemplateMap $request_templates;
  public ?SelectionExpression $template_selection_expression;
  public ?IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public ?TlsConfigInput $tls_config;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'connection_id' => ?StringWithLengthBetween1And1024,
    ?'connection_type' => ?ConnectionType,
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'credentials_arn' => ?Arn,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'integration_method' => ?StringWithLengthBetween1And64,
    ?'integration_type' => ?IntegrationType,
    ?'integration_uri' => ?UriWithLengthBetween1And2048,
    ?'passthrough_behavior' => ?PassthroughBehavior,
    ?'payload_format_version' => ?StringWithLengthBetween1And64,
    ?'request_parameters' => ?IntegrationParameters,
    ?'request_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
    ?'timeout_in_millis' => ?IntegerWithLengthBetween50And30000,
    ?'tls_config' => ?TlsConfigInput,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->connection_id = $s['connection_id'] ?? '';
    $this->connection_type = $s['connection_type'] ?? '';
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->credentials_arn = $s['credentials_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->integration_method = $s['integration_method'] ?? '';
    $this->integration_type = $s['integration_type'] ?? '';
    $this->integration_uri = $s['integration_uri'] ?? '';
    $this->passthrough_behavior = $s['passthrough_behavior'] ?? '';
    $this->payload_format_version = $s['payload_format_version'] ?? '';
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->request_templates = $s['request_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
    $this->timeout_in_millis = $s['timeout_in_millis'] ?? 0;
    $this->tls_config = $s['tls_config'] ?? null;
  }
}

class CreateIntegrationResponseInput {
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?SelectionKey $integration_response_key;
  public ?IntegrationParameters $response_parameters;
  public ?TemplateMap $response_templates;
  public ?SelectionExpression $template_selection_expression;

  public function __construct(shape(
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'integration_response_key' => ?SelectionKey,
    ?'response_parameters' => ?IntegrationParameters,
    ?'response_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
  ) $s = shape()) {
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->integration_response_key = $s['integration_response_key'] ?? '';
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->response_templates = $s['response_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
  }
}

class CreateIntegrationResponseRequest {
  public ?__string $api_id;
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?__string $integration_id;
  public ?SelectionKey $integration_response_key;
  public ?IntegrationParameters $response_parameters;
  public ?TemplateMap $response_templates;
  public ?SelectionExpression $template_selection_expression;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'integration_id' => ?__string,
    ?'integration_response_key' => ?SelectionKey,
    ?'response_parameters' => ?IntegrationParameters,
    ?'response_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->integration_id = $s['integration_id'] ?? '';
    $this->integration_response_key = $s['integration_response_key'] ?? '';
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->response_templates = $s['response_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
  }
}

class CreateIntegrationResponseResponse {
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?Id $integration_response_id;
  public ?SelectionKey $integration_response_key;
  public ?IntegrationParameters $response_parameters;
  public ?TemplateMap $response_templates;
  public ?SelectionExpression $template_selection_expression;

  public function __construct(shape(
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'integration_response_id' => ?Id,
    ?'integration_response_key' => ?SelectionKey,
    ?'response_parameters' => ?IntegrationParameters,
    ?'response_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
  ) $s = shape()) {
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->integration_response_id = $s['integration_response_id'] ?? '';
    $this->integration_response_key = $s['integration_response_key'] ?? '';
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->response_templates = $s['response_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
  }
}

class CreateIntegrationResult {
  public ?__boolean $api_gateway_managed;
  public ?StringWithLengthBetween1And1024 $connection_id;
  public ?ConnectionType $connection_type;
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?Arn $credentials_arn;
  public ?StringWithLengthBetween0And1024 $description;
  public ?Id $integration_id;
  public ?StringWithLengthBetween1And64 $integration_method;
  public ?SelectionExpression $integration_response_selection_expression;
  public ?IntegrationType $integration_type;
  public ?UriWithLengthBetween1And2048 $integration_uri;
  public ?PassthroughBehavior $passthrough_behavior;
  public ?StringWithLengthBetween1And64 $payload_format_version;
  public ?IntegrationParameters $request_parameters;
  public ?TemplateMap $request_templates;
  public ?SelectionExpression $template_selection_expression;
  public ?IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public ?TlsConfig $tls_config;

  public function __construct(shape(
    ?'api_gateway_managed' => ?__boolean,
    ?'connection_id' => ?StringWithLengthBetween1And1024,
    ?'connection_type' => ?ConnectionType,
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'credentials_arn' => ?Arn,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'integration_id' => ?Id,
    ?'integration_method' => ?StringWithLengthBetween1And64,
    ?'integration_response_selection_expression' => ?SelectionExpression,
    ?'integration_type' => ?IntegrationType,
    ?'integration_uri' => ?UriWithLengthBetween1And2048,
    ?'passthrough_behavior' => ?PassthroughBehavior,
    ?'payload_format_version' => ?StringWithLengthBetween1And64,
    ?'request_parameters' => ?IntegrationParameters,
    ?'request_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
    ?'timeout_in_millis' => ?IntegerWithLengthBetween50And30000,
    ?'tls_config' => ?TlsConfig,
  ) $s = shape()) {
    $this->api_gateway_managed = $s['api_gateway_managed'] ?? false;
    $this->connection_id = $s['connection_id'] ?? '';
    $this->connection_type = $s['connection_type'] ?? '';
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->credentials_arn = $s['credentials_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->integration_id = $s['integration_id'] ?? '';
    $this->integration_method = $s['integration_method'] ?? '';
    $this->integration_response_selection_expression = $s['integration_response_selection_expression'] ?? '';
    $this->integration_type = $s['integration_type'] ?? '';
    $this->integration_uri = $s['integration_uri'] ?? '';
    $this->passthrough_behavior = $s['passthrough_behavior'] ?? '';
    $this->payload_format_version = $s['payload_format_version'] ?? '';
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->request_templates = $s['request_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
    $this->timeout_in_millis = $s['timeout_in_millis'] ?? 0;
    $this->tls_config = $s['tls_config'] ?? null;
  }
}

class CreateModelInput {
  public ?StringWithLengthBetween1And256 $content_type;
  public ?StringWithLengthBetween0And1024 $description;
  public ?StringWithLengthBetween1And128 $name;
  public ?StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
    ?'content_type' => ?StringWithLengthBetween1And256,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'schema' => ?StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->content_type = $s['content_type'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->schema = $s['schema'] ?? '';
  }
}

class CreateModelRequest {
  public ?__string $api_id;
  public ?StringWithLengthBetween1And256 $content_type;
  public ?StringWithLengthBetween0And1024 $description;
  public ?StringWithLengthBetween1And128 $name;
  public ?StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'content_type' => ?StringWithLengthBetween1And256,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'schema' => ?StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->schema = $s['schema'] ?? '';
  }
}

class CreateModelResponse {
  public ?StringWithLengthBetween1And256 $content_type;
  public ?StringWithLengthBetween0And1024 $description;
  public ?Id $model_id;
  public ?StringWithLengthBetween1And128 $name;
  public ?StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
    ?'content_type' => ?StringWithLengthBetween1And256,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'model_id' => ?Id,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'schema' => ?StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->content_type = $s['content_type'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->model_id = $s['model_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->schema = $s['schema'] ?? '';
  }
}

class CreateRouteInput {
  public ?__boolean $api_key_required;
  public ?AuthorizationScopes $authorization_scopes;
  public ?AuthorizationType $authorization_type;
  public ?Id $authorizer_id;
  public ?SelectionExpression $model_selection_expression;
  public ?StringWithLengthBetween1And64 $operation_name;
  public ?RouteModels $request_models;
  public ?RouteParameters $request_parameters;
  public ?SelectionKey $route_key;
  public ?SelectionExpression $route_response_selection_expression;
  public ?StringWithLengthBetween1And128 $target;

  public function __construct(shape(
    ?'api_key_required' => ?__boolean,
    ?'authorization_scopes' => ?AuthorizationScopes,
    ?'authorization_type' => ?AuthorizationType,
    ?'authorizer_id' => ?Id,
    ?'model_selection_expression' => ?SelectionExpression,
    ?'operation_name' => ?StringWithLengthBetween1And64,
    ?'request_models' => ?RouteModels,
    ?'request_parameters' => ?RouteParameters,
    ?'route_key' => ?SelectionKey,
    ?'route_response_selection_expression' => ?SelectionExpression,
    ?'target' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_key_required = $s['api_key_required'] ?? false;
    $this->authorization_scopes = $s['authorization_scopes'] ?? vec[];
    $this->authorization_type = $s['authorization_type'] ?? '';
    $this->authorizer_id = $s['authorizer_id'] ?? '';
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->operation_name = $s['operation_name'] ?? '';
    $this->request_models = $s['request_models'] ?? dict[];
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->route_key = $s['route_key'] ?? '';
    $this->route_response_selection_expression = $s['route_response_selection_expression'] ?? '';
    $this->target = $s['target'] ?? '';
  }
}

class CreateRouteRequest {
  public ?__string $api_id;
  public ?__boolean $api_key_required;
  public ?AuthorizationScopes $authorization_scopes;
  public ?AuthorizationType $authorization_type;
  public ?Id $authorizer_id;
  public ?SelectionExpression $model_selection_expression;
  public ?StringWithLengthBetween1And64 $operation_name;
  public ?RouteModels $request_models;
  public ?RouteParameters $request_parameters;
  public ?SelectionKey $route_key;
  public ?SelectionExpression $route_response_selection_expression;
  public ?StringWithLengthBetween1And128 $target;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'api_key_required' => ?__boolean,
    ?'authorization_scopes' => ?AuthorizationScopes,
    ?'authorization_type' => ?AuthorizationType,
    ?'authorizer_id' => ?Id,
    ?'model_selection_expression' => ?SelectionExpression,
    ?'operation_name' => ?StringWithLengthBetween1And64,
    ?'request_models' => ?RouteModels,
    ?'request_parameters' => ?RouteParameters,
    ?'route_key' => ?SelectionKey,
    ?'route_response_selection_expression' => ?SelectionExpression,
    ?'target' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->api_key_required = $s['api_key_required'] ?? false;
    $this->authorization_scopes = $s['authorization_scopes'] ?? vec[];
    $this->authorization_type = $s['authorization_type'] ?? '';
    $this->authorizer_id = $s['authorizer_id'] ?? '';
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->operation_name = $s['operation_name'] ?? '';
    $this->request_models = $s['request_models'] ?? dict[];
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->route_key = $s['route_key'] ?? '';
    $this->route_response_selection_expression = $s['route_response_selection_expression'] ?? '';
    $this->target = $s['target'] ?? '';
  }
}

class CreateRouteResponseInput {
  public ?SelectionExpression $model_selection_expression;
  public ?RouteModels $response_models;
  public ?RouteParameters $response_parameters;
  public ?SelectionKey $route_response_key;

  public function __construct(shape(
    ?'model_selection_expression' => ?SelectionExpression,
    ?'response_models' => ?RouteModels,
    ?'response_parameters' => ?RouteParameters,
    ?'route_response_key' => ?SelectionKey,
  ) $s = shape()) {
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->response_models = $s['response_models'] ?? dict[];
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->route_response_key = $s['route_response_key'] ?? '';
  }
}

class CreateRouteResponseRequest {
  public ?__string $api_id;
  public ?SelectionExpression $model_selection_expression;
  public ?RouteModels $response_models;
  public ?RouteParameters $response_parameters;
  public ?__string $route_id;
  public ?SelectionKey $route_response_key;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'model_selection_expression' => ?SelectionExpression,
    ?'response_models' => ?RouteModels,
    ?'response_parameters' => ?RouteParameters,
    ?'route_id' => ?__string,
    ?'route_response_key' => ?SelectionKey,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->response_models = $s['response_models'] ?? dict[];
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->route_id = $s['route_id'] ?? '';
    $this->route_response_key = $s['route_response_key'] ?? '';
  }
}

class CreateRouteResponseResponse {
  public ?SelectionExpression $model_selection_expression;
  public ?RouteModels $response_models;
  public ?RouteParameters $response_parameters;
  public ?Id $route_response_id;
  public ?SelectionKey $route_response_key;

  public function __construct(shape(
    ?'model_selection_expression' => ?SelectionExpression,
    ?'response_models' => ?RouteModels,
    ?'response_parameters' => ?RouteParameters,
    ?'route_response_id' => ?Id,
    ?'route_response_key' => ?SelectionKey,
  ) $s = shape()) {
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->response_models = $s['response_models'] ?? dict[];
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->route_response_id = $s['route_response_id'] ?? '';
    $this->route_response_key = $s['route_response_key'] ?? '';
  }
}

class CreateRouteResult {
  public ?__boolean $api_gateway_managed;
  public ?__boolean $api_key_required;
  public ?AuthorizationScopes $authorization_scopes;
  public ?AuthorizationType $authorization_type;
  public ?Id $authorizer_id;
  public ?SelectionExpression $model_selection_expression;
  public ?StringWithLengthBetween1And64 $operation_name;
  public ?RouteModels $request_models;
  public ?RouteParameters $request_parameters;
  public ?Id $route_id;
  public ?SelectionKey $route_key;
  public ?SelectionExpression $route_response_selection_expression;
  public ?StringWithLengthBetween1And128 $target;

  public function __construct(shape(
    ?'api_gateway_managed' => ?__boolean,
    ?'api_key_required' => ?__boolean,
    ?'authorization_scopes' => ?AuthorizationScopes,
    ?'authorization_type' => ?AuthorizationType,
    ?'authorizer_id' => ?Id,
    ?'model_selection_expression' => ?SelectionExpression,
    ?'operation_name' => ?StringWithLengthBetween1And64,
    ?'request_models' => ?RouteModels,
    ?'request_parameters' => ?RouteParameters,
    ?'route_id' => ?Id,
    ?'route_key' => ?SelectionKey,
    ?'route_response_selection_expression' => ?SelectionExpression,
    ?'target' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_gateway_managed = $s['api_gateway_managed'] ?? false;
    $this->api_key_required = $s['api_key_required'] ?? false;
    $this->authorization_scopes = $s['authorization_scopes'] ?? vec[];
    $this->authorization_type = $s['authorization_type'] ?? '';
    $this->authorizer_id = $s['authorizer_id'] ?? '';
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->operation_name = $s['operation_name'] ?? '';
    $this->request_models = $s['request_models'] ?? dict[];
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->route_id = $s['route_id'] ?? '';
    $this->route_key = $s['route_key'] ?? '';
    $this->route_response_selection_expression = $s['route_response_selection_expression'] ?? '';
    $this->target = $s['target'] ?? '';
  }
}

class CreateStageInput {
  public ?AccessLogSettings $access_log_settings;
  public ?__boolean $auto_deploy;
  public ?Id $client_certificate_id;
  public ?RouteSettings $default_route_settings;
  public ?Id $deployment_id;
  public ?StringWithLengthBetween0And1024 $description;
  public ?RouteSettingsMap $route_settings;
  public ?StringWithLengthBetween1And128 $stage_name;
  public ?StageVariablesMap $stage_variables;
  public ?Tags $tags;

  public function __construct(shape(
    ?'access_log_settings' => ?AccessLogSettings,
    ?'auto_deploy' => ?__boolean,
    ?'client_certificate_id' => ?Id,
    ?'default_route_settings' => ?RouteSettings,
    ?'deployment_id' => ?Id,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'route_settings' => ?RouteSettingsMap,
    ?'stage_name' => ?StringWithLengthBetween1And128,
    ?'stage_variables' => ?StageVariablesMap,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->access_log_settings = $s['access_log_settings'] ?? null;
    $this->auto_deploy = $s['auto_deploy'] ?? false;
    $this->client_certificate_id = $s['client_certificate_id'] ?? '';
    $this->default_route_settings = $s['default_route_settings'] ?? null;
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->route_settings = $s['route_settings'] ?? dict[];
    $this->stage_name = $s['stage_name'] ?? '';
    $this->stage_variables = $s['stage_variables'] ?? dict[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateStageRequest {
  public ?AccessLogSettings $access_log_settings;
  public ?__string $api_id;
  public ?__boolean $auto_deploy;
  public ?Id $client_certificate_id;
  public ?RouteSettings $default_route_settings;
  public ?Id $deployment_id;
  public ?StringWithLengthBetween0And1024 $description;
  public ?RouteSettingsMap $route_settings;
  public ?StringWithLengthBetween1And128 $stage_name;
  public ?StageVariablesMap $stage_variables;
  public ?Tags $tags;

  public function __construct(shape(
    ?'access_log_settings' => ?AccessLogSettings,
    ?'api_id' => ?__string,
    ?'auto_deploy' => ?__boolean,
    ?'client_certificate_id' => ?Id,
    ?'default_route_settings' => ?RouteSettings,
    ?'deployment_id' => ?Id,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'route_settings' => ?RouteSettingsMap,
    ?'stage_name' => ?StringWithLengthBetween1And128,
    ?'stage_variables' => ?StageVariablesMap,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->access_log_settings = $s['access_log_settings'] ?? null;
    $this->api_id = $s['api_id'] ?? '';
    $this->auto_deploy = $s['auto_deploy'] ?? false;
    $this->client_certificate_id = $s['client_certificate_id'] ?? '';
    $this->default_route_settings = $s['default_route_settings'] ?? null;
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->route_settings = $s['route_settings'] ?? dict[];
    $this->stage_name = $s['stage_name'] ?? '';
    $this->stage_variables = $s['stage_variables'] ?? dict[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateStageResponse {
  public ?AccessLogSettings $access_log_settings;
  public ?__boolean $api_gateway_managed;
  public ?__boolean $auto_deploy;
  public ?Id $client_certificate_id;
  public ?__timestampIso8601 $created_date;
  public ?RouteSettings $default_route_settings;
  public ?Id $deployment_id;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__string $last_deployment_status_message;
  public ?__timestampIso8601 $last_updated_date;
  public ?RouteSettingsMap $route_settings;
  public ?StringWithLengthBetween1And128 $stage_name;
  public ?StageVariablesMap $stage_variables;
  public ?Tags $tags;

  public function __construct(shape(
    ?'access_log_settings' => ?AccessLogSettings,
    ?'api_gateway_managed' => ?__boolean,
    ?'auto_deploy' => ?__boolean,
    ?'client_certificate_id' => ?Id,
    ?'created_date' => ?__timestampIso8601,
    ?'default_route_settings' => ?RouteSettings,
    ?'deployment_id' => ?Id,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'last_deployment_status_message' => ?__string,
    ?'last_updated_date' => ?__timestampIso8601,
    ?'route_settings' => ?RouteSettingsMap,
    ?'stage_name' => ?StringWithLengthBetween1And128,
    ?'stage_variables' => ?StageVariablesMap,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->access_log_settings = $s['access_log_settings'] ?? null;
    $this->api_gateway_managed = $s['api_gateway_managed'] ?? false;
    $this->auto_deploy = $s['auto_deploy'] ?? false;
    $this->client_certificate_id = $s['client_certificate_id'] ?? '';
    $this->created_date = $s['created_date'] ?? 0;
    $this->default_route_settings = $s['default_route_settings'] ?? null;
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->last_deployment_status_message = $s['last_deployment_status_message'] ?? '';
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->route_settings = $s['route_settings'] ?? dict[];
    $this->stage_name = $s['stage_name'] ?? '';
    $this->stage_variables = $s['stage_variables'] ?? dict[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateVpcLinkInput {
  public ?StringWithLengthBetween1And128 $name;
  public ?SecurityGroupIdList $security_group_ids;
  public ?SubnetIdList $subnet_ids;
  public ?Tags $tags;

  public function __construct(shape(
    ?'name' => ?StringWithLengthBetween1And128,
    ?'security_group_ids' => ?SecurityGroupIdList,
    ?'subnet_ids' => ?SubnetIdList,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateVpcLinkRequest {
  public ?StringWithLengthBetween1And128 $name;
  public ?SecurityGroupIdList $security_group_ids;
  public ?SubnetIdList $subnet_ids;
  public ?Tags $tags;

  public function __construct(shape(
    ?'name' => ?StringWithLengthBetween1And128,
    ?'security_group_ids' => ?SecurityGroupIdList,
    ?'subnet_ids' => ?SubnetIdList,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateVpcLinkResponse {
  public ?__timestampIso8601 $created_date;
  public ?StringWithLengthBetween1And128 $name;
  public ?SecurityGroupIdList $security_group_ids;
  public ?SubnetIdList $subnet_ids;
  public ?Tags $tags;
  public ?Id $vpc_link_id;
  public ?VpcLinkStatus $vpc_link_status;
  public ?StringWithLengthBetween0And1024 $vpc_link_status_message;
  public ?VpcLinkVersion $vpc_link_version;

  public function __construct(shape(
    ?'created_date' => ?__timestampIso8601,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'security_group_ids' => ?SecurityGroupIdList,
    ?'subnet_ids' => ?SubnetIdList,
    ?'tags' => ?Tags,
    ?'vpc_link_id' => ?Id,
    ?'vpc_link_status' => ?VpcLinkStatus,
    ?'vpc_link_status_message' => ?StringWithLengthBetween0And1024,
    ?'vpc_link_version' => ?VpcLinkVersion,
  ) $s = shape()) {
    $this->created_date = $s['created_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->vpc_link_id = $s['vpc_link_id'] ?? '';
    $this->vpc_link_status = $s['vpc_link_status'] ?? '';
    $this->vpc_link_status_message = $s['vpc_link_status_message'] ?? '';
    $this->vpc_link_version = $s['vpc_link_version'] ?? '';
  }
}

class DeleteAccessLogSettingsRequest {
  public ?__string $api_id;
  public ?__string $stage_name;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'stage_name' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->stage_name = $s['stage_name'] ?? '';
  }
}

class DeleteApiMappingRequest {
  public ?__string $api_mapping_id;
  public ?__string $domain_name;

  public function __construct(shape(
    ?'api_mapping_id' => ?__string,
    ?'domain_name' => ?__string,
  ) $s = shape()) {
    $this->api_mapping_id = $s['api_mapping_id'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DeleteApiRequest {
  public ?__string $api_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
  }
}

class DeleteAuthorizerRequest {
  public ?__string $api_id;
  public ?__string $authorizer_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'authorizer_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->authorizer_id = $s['authorizer_id'] ?? '';
  }
}

class DeleteCorsConfigurationRequest {
  public ?__string $api_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
  }
}

class DeleteDeploymentRequest {
  public ?__string $api_id;
  public ?__string $deployment_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'deployment_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->deployment_id = $s['deployment_id'] ?? '';
  }
}

class DeleteDomainNameRequest {
  public ?__string $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?__string,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DeleteIntegrationRequest {
  public ?__string $api_id;
  public ?__string $integration_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'integration_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->integration_id = $s['integration_id'] ?? '';
  }
}

class DeleteIntegrationResponseRequest {
  public ?__string $api_id;
  public ?__string $integration_id;
  public ?__string $integration_response_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'integration_id' => ?__string,
    ?'integration_response_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->integration_id = $s['integration_id'] ?? '';
    $this->integration_response_id = $s['integration_response_id'] ?? '';
  }
}

class DeleteModelRequest {
  public ?__string $api_id;
  public ?__string $model_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'model_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->model_id = $s['model_id'] ?? '';
  }
}

class DeleteRouteRequest {
  public ?__string $api_id;
  public ?__string $route_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'route_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->route_id = $s['route_id'] ?? '';
  }
}

class DeleteRouteRequestParameterRequest {
  public ?__string $api_id;
  public ?__string $request_parameter_key;
  public ?__string $route_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'request_parameter_key' => ?__string,
    ?'route_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->request_parameter_key = $s['request_parameter_key'] ?? '';
    $this->route_id = $s['route_id'] ?? '';
  }
}

class DeleteRouteResponseRequest {
  public ?__string $api_id;
  public ?__string $route_id;
  public ?__string $route_response_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'route_id' => ?__string,
    ?'route_response_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->route_id = $s['route_id'] ?? '';
    $this->route_response_id = $s['route_response_id'] ?? '';
  }
}

class DeleteRouteSettingsRequest {
  public ?__string $api_id;
  public ?__string $route_key;
  public ?__string $stage_name;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'route_key' => ?__string,
    ?'stage_name' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->route_key = $s['route_key'] ?? '';
    $this->stage_name = $s['stage_name'] ?? '';
  }
}

class DeleteStageRequest {
  public ?__string $api_id;
  public ?__string $stage_name;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'stage_name' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->stage_name = $s['stage_name'] ?? '';
  }
}

class DeleteVpcLinkRequest {
  public ?__string $vpc_link_id;

  public function __construct(shape(
    ?'vpc_link_id' => ?__string,
  ) $s = shape()) {
    $this->vpc_link_id = $s['vpc_link_id'] ?? '';
  }
}

class DeleteVpcLinkResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Deployment {
  public ?__boolean $auto_deployed;
  public ?__timestampIso8601 $created_date;
  public ?Id $deployment_id;
  public ?DeploymentStatus $deployment_status;
  public ?__string $deployment_status_message;
  public ?StringWithLengthBetween0And1024 $description;

  public function __construct(shape(
    ?'auto_deployed' => ?__boolean,
    ?'created_date' => ?__timestampIso8601,
    ?'deployment_id' => ?Id,
    ?'deployment_status' => ?DeploymentStatus,
    ?'deployment_status_message' => ?__string,
    ?'description' => ?StringWithLengthBetween0And1024,
  ) $s = shape()) {
    $this->auto_deployed = $s['auto_deployed'] ?? false;
    $this->created_date = $s['created_date'] ?? 0;
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->deployment_status = $s['deployment_status'] ?? '';
    $this->deployment_status_message = $s['deployment_status_message'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

type DeploymentStatus = string;

class Deployments {
  public ?__listOfDeployment $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfDeployment,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DomainName {
  public ?SelectionExpression $api_mapping_selection_expression;
  public ?StringWithLengthBetween1And512 $domain_name;
  public ?DomainNameConfigurations $domain_name_configurations;
  public ?Tags $tags;

  public function __construct(shape(
    ?'api_mapping_selection_expression' => ?SelectionExpression,
    ?'domain_name' => ?StringWithLengthBetween1And512,
    ?'domain_name_configurations' => ?DomainNameConfigurations,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->api_mapping_selection_expression = $s['api_mapping_selection_expression'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->domain_name_configurations = $s['domain_name_configurations'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class DomainNameConfiguration {
  public ?__string $api_gateway_domain_name;
  public ?Arn $certificate_arn;
  public ?StringWithLengthBetween1And128 $certificate_name;
  public ?__timestampIso8601 $certificate_upload_date;
  public ?DomainNameStatus $domain_name_status;
  public ?__string $domain_name_status_message;
  public ?EndpointType $endpoint_type;
  public ?__string $hosted_zone_id;
  public ?SecurityPolicy $security_policy;

  public function __construct(shape(
    ?'api_gateway_domain_name' => ?__string,
    ?'certificate_arn' => ?Arn,
    ?'certificate_name' => ?StringWithLengthBetween1And128,
    ?'certificate_upload_date' => ?__timestampIso8601,
    ?'domain_name_status' => ?DomainNameStatus,
    ?'domain_name_status_message' => ?__string,
    ?'endpoint_type' => ?EndpointType,
    ?'hosted_zone_id' => ?__string,
    ?'security_policy' => ?SecurityPolicy,
  ) $s = shape()) {
    $this->api_gateway_domain_name = $s['api_gateway_domain_name'] ?? '';
    $this->certificate_arn = $s['certificate_arn'] ?? '';
    $this->certificate_name = $s['certificate_name'] ?? '';
    $this->certificate_upload_date = $s['certificate_upload_date'] ?? 0;
    $this->domain_name_status = $s['domain_name_status'] ?? '';
    $this->domain_name_status_message = $s['domain_name_status_message'] ?? '';
    $this->endpoint_type = $s['endpoint_type'] ?? '';
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->security_policy = $s['security_policy'] ?? '';
  }
}

type DomainNameConfigurations = vec<DomainNameConfiguration>;

type DomainNameStatus = string;

class DomainNames {
  public ?__listOfDomainName $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfDomainName,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type EndpointType = string;

class ExportApiRequest {
  public ?__string $api_id;
  public ?__string $export_version;
  public ?__boolean $include_extensions;
  public ?__string $output_type;
  public ?__string $specification;
  public ?__string $stage_name;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'export_version' => ?__string,
    ?'include_extensions' => ?__boolean,
    ?'output_type' => ?__string,
    ?'specification' => ?__string,
    ?'stage_name' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->export_version = $s['export_version'] ?? '';
    $this->include_extensions = $s['include_extensions'] ?? false;
    $this->output_type = $s['output_type'] ?? '';
    $this->specification = $s['specification'] ?? '';
    $this->stage_name = $s['stage_name'] ?? '';
  }
}

class ExportApiResponse {
  public ?ExportedApi $body;

  public function __construct(shape(
    ?'body' => ?ExportedApi,
  ) $s = shape()) {
    $this->body = $s['body'] ?? '';
  }
}

type ExportedApi = string;

class GetApiMappingRequest {
  public ?__string $api_mapping_id;
  public ?__string $domain_name;

  public function __construct(shape(
    ?'api_mapping_id' => ?__string,
    ?'domain_name' => ?__string,
  ) $s = shape()) {
    $this->api_mapping_id = $s['api_mapping_id'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class GetApiMappingResponse {
  public ?Id $api_id;
  public ?Id $api_mapping_id;
  public ?SelectionKey $api_mapping_key;
  public ?StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
    ?'api_id' => ?Id,
    ?'api_mapping_id' => ?Id,
    ?'api_mapping_key' => ?SelectionKey,
    ?'stage' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->api_mapping_id = $s['api_mapping_id'] ?? '';
    $this->api_mapping_key = $s['api_mapping_key'] ?? '';
    $this->stage = $s['stage'] ?? '';
  }
}

class GetApiMappingsRequest {
  public ?__string $domain_name;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'domain_name' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetApiMappingsResponse {
  public ?__listOfApiMapping $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfApiMapping,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetApiRequest {
  public ?__string $api_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
  }
}

class GetApiResponse {
  public ?__string $api_endpoint;
  public ?Id $api_id;
  public ?SelectionExpression $api_key_selection_expression;
  public ?Cors $cors_configuration;
  public ?__timestampIso8601 $created_date;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__boolean $disable_schema_validation;
  public ?__listOf__string $import_info;
  public ?StringWithLengthBetween1And128 $name;
  public ?ProtocolType $protocol_type;
  public ?SelectionExpression $route_selection_expression;
  public ?Tags $tags;
  public ?StringWithLengthBetween1And64 $version;
  public ?__listOf__string $warnings;

  public function __construct(shape(
    ?'api_endpoint' => ?__string,
    ?'api_id' => ?Id,
    ?'api_key_selection_expression' => ?SelectionExpression,
    ?'cors_configuration' => ?Cors,
    ?'created_date' => ?__timestampIso8601,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'disable_schema_validation' => ?__boolean,
    ?'import_info' => ?__listOf__string,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'protocol_type' => ?ProtocolType,
    ?'route_selection_expression' => ?SelectionExpression,
    ?'tags' => ?Tags,
    ?'version' => ?StringWithLengthBetween1And64,
    ?'warnings' => ?__listOf__string,
  ) $s = shape()) {
    $this->api_endpoint = $s['api_endpoint'] ?? '';
    $this->api_id = $s['api_id'] ?? '';
    $this->api_key_selection_expression = $s['api_key_selection_expression'] ?? '';
    $this->cors_configuration = $s['cors_configuration'] ?? null;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->disable_schema_validation = $s['disable_schema_validation'] ?? false;
    $this->import_info = $s['import_info'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->protocol_type = $s['protocol_type'] ?? '';
    $this->route_selection_expression = $s['route_selection_expression'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->version = $s['version'] ?? '';
    $this->warnings = $s['warnings'] ?? vec[];
  }
}

class GetApisRequest {
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetApisResponse {
  public ?__listOfApi $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfApi,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetAuthorizerRequest {
  public ?__string $api_id;
  public ?__string $authorizer_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'authorizer_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->authorizer_id = $s['authorizer_id'] ?? '';
  }
}

class GetAuthorizerResponse {
  public ?Arn $authorizer_credentials_arn;
  public ?Id $authorizer_id;
  public ?IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public ?AuthorizerType $authorizer_type;
  public ?UriWithLengthBetween1And2048 $authorizer_uri;
  public ?IdentitySourceList $identity_source;
  public ?StringWithLengthBetween0And1024 $identity_validation_expression;
  public ?JWTConfiguration $jwt_configuration;
  public ?StringWithLengthBetween1And128 $name;

  public function __construct(shape(
    ?'authorizer_credentials_arn' => ?Arn,
    ?'authorizer_id' => ?Id,
    ?'authorizer_result_ttl_in_seconds' => ?IntegerWithLengthBetween0And3600,
    ?'authorizer_type' => ?AuthorizerType,
    ?'authorizer_uri' => ?UriWithLengthBetween1And2048,
    ?'identity_source' => ?IdentitySourceList,
    ?'identity_validation_expression' => ?StringWithLengthBetween0And1024,
    ?'jwt_configuration' => ?JWTConfiguration,
    ?'name' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->authorizer_credentials_arn = $s['authorizer_credentials_arn'] ?? '';
    $this->authorizer_id = $s['authorizer_id'] ?? '';
    $this->authorizer_result_ttl_in_seconds = $s['authorizer_result_ttl_in_seconds'] ?? 0;
    $this->authorizer_type = $s['authorizer_type'] ?? '';
    $this->authorizer_uri = $s['authorizer_uri'] ?? '';
    $this->identity_source = $s['identity_source'] ?? vec[];
    $this->identity_validation_expression = $s['identity_validation_expression'] ?? '';
    $this->jwt_configuration = $s['jwt_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

class GetAuthorizersRequest {
  public ?__string $api_id;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetAuthorizersResponse {
  public ?__listOfAuthorizer $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfAuthorizer,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetDeploymentRequest {
  public ?__string $api_id;
  public ?__string $deployment_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'deployment_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->deployment_id = $s['deployment_id'] ?? '';
  }
}

class GetDeploymentResponse {
  public ?__boolean $auto_deployed;
  public ?__timestampIso8601 $created_date;
  public ?Id $deployment_id;
  public ?DeploymentStatus $deployment_status;
  public ?__string $deployment_status_message;
  public ?StringWithLengthBetween0And1024 $description;

  public function __construct(shape(
    ?'auto_deployed' => ?__boolean,
    ?'created_date' => ?__timestampIso8601,
    ?'deployment_id' => ?Id,
    ?'deployment_status' => ?DeploymentStatus,
    ?'deployment_status_message' => ?__string,
    ?'description' => ?StringWithLengthBetween0And1024,
  ) $s = shape()) {
    $this->auto_deployed = $s['auto_deployed'] ?? false;
    $this->created_date = $s['created_date'] ?? 0;
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->deployment_status = $s['deployment_status'] ?? '';
    $this->deployment_status_message = $s['deployment_status_message'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

class GetDeploymentsRequest {
  public ?__string $api_id;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetDeploymentsResponse {
  public ?__listOfDeployment $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfDeployment,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetDomainNameRequest {
  public ?__string $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?__string,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class GetDomainNameResponse {
  public ?SelectionExpression $api_mapping_selection_expression;
  public ?StringWithLengthBetween1And512 $domain_name;
  public ?DomainNameConfigurations $domain_name_configurations;
  public ?Tags $tags;

  public function __construct(shape(
    ?'api_mapping_selection_expression' => ?SelectionExpression,
    ?'domain_name' => ?StringWithLengthBetween1And512,
    ?'domain_name_configurations' => ?DomainNameConfigurations,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->api_mapping_selection_expression = $s['api_mapping_selection_expression'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->domain_name_configurations = $s['domain_name_configurations'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class GetDomainNamesRequest {
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetDomainNamesResponse {
  public ?__listOfDomainName $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfDomainName,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetIntegrationRequest {
  public ?__string $api_id;
  public ?__string $integration_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'integration_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->integration_id = $s['integration_id'] ?? '';
  }
}

class GetIntegrationResponseRequest {
  public ?__string $api_id;
  public ?__string $integration_id;
  public ?__string $integration_response_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'integration_id' => ?__string,
    ?'integration_response_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->integration_id = $s['integration_id'] ?? '';
    $this->integration_response_id = $s['integration_response_id'] ?? '';
  }
}

class GetIntegrationResponseResponse {
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?Id $integration_response_id;
  public ?SelectionKey $integration_response_key;
  public ?IntegrationParameters $response_parameters;
  public ?TemplateMap $response_templates;
  public ?SelectionExpression $template_selection_expression;

  public function __construct(shape(
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'integration_response_id' => ?Id,
    ?'integration_response_key' => ?SelectionKey,
    ?'response_parameters' => ?IntegrationParameters,
    ?'response_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
  ) $s = shape()) {
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->integration_response_id = $s['integration_response_id'] ?? '';
    $this->integration_response_key = $s['integration_response_key'] ?? '';
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->response_templates = $s['response_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
  }
}

class GetIntegrationResponsesRequest {
  public ?__string $api_id;
  public ?__string $integration_id;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'integration_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->integration_id = $s['integration_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetIntegrationResponsesResponse {
  public ?__listOfIntegrationResponse $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfIntegrationResponse,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetIntegrationResult {
  public ?__boolean $api_gateway_managed;
  public ?StringWithLengthBetween1And1024 $connection_id;
  public ?ConnectionType $connection_type;
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?Arn $credentials_arn;
  public ?StringWithLengthBetween0And1024 $description;
  public ?Id $integration_id;
  public ?StringWithLengthBetween1And64 $integration_method;
  public ?SelectionExpression $integration_response_selection_expression;
  public ?IntegrationType $integration_type;
  public ?UriWithLengthBetween1And2048 $integration_uri;
  public ?PassthroughBehavior $passthrough_behavior;
  public ?StringWithLengthBetween1And64 $payload_format_version;
  public ?IntegrationParameters $request_parameters;
  public ?TemplateMap $request_templates;
  public ?SelectionExpression $template_selection_expression;
  public ?IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public ?TlsConfig $tls_config;

  public function __construct(shape(
    ?'api_gateway_managed' => ?__boolean,
    ?'connection_id' => ?StringWithLengthBetween1And1024,
    ?'connection_type' => ?ConnectionType,
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'credentials_arn' => ?Arn,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'integration_id' => ?Id,
    ?'integration_method' => ?StringWithLengthBetween1And64,
    ?'integration_response_selection_expression' => ?SelectionExpression,
    ?'integration_type' => ?IntegrationType,
    ?'integration_uri' => ?UriWithLengthBetween1And2048,
    ?'passthrough_behavior' => ?PassthroughBehavior,
    ?'payload_format_version' => ?StringWithLengthBetween1And64,
    ?'request_parameters' => ?IntegrationParameters,
    ?'request_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
    ?'timeout_in_millis' => ?IntegerWithLengthBetween50And30000,
    ?'tls_config' => ?TlsConfig,
  ) $s = shape()) {
    $this->api_gateway_managed = $s['api_gateway_managed'] ?? false;
    $this->connection_id = $s['connection_id'] ?? '';
    $this->connection_type = $s['connection_type'] ?? '';
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->credentials_arn = $s['credentials_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->integration_id = $s['integration_id'] ?? '';
    $this->integration_method = $s['integration_method'] ?? '';
    $this->integration_response_selection_expression = $s['integration_response_selection_expression'] ?? '';
    $this->integration_type = $s['integration_type'] ?? '';
    $this->integration_uri = $s['integration_uri'] ?? '';
    $this->passthrough_behavior = $s['passthrough_behavior'] ?? '';
    $this->payload_format_version = $s['payload_format_version'] ?? '';
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->request_templates = $s['request_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
    $this->timeout_in_millis = $s['timeout_in_millis'] ?? 0;
    $this->tls_config = $s['tls_config'] ?? null;
  }
}

class GetIntegrationsRequest {
  public ?__string $api_id;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetIntegrationsResponse {
  public ?__listOfIntegration $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfIntegration,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetModelRequest {
  public ?__string $api_id;
  public ?__string $model_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'model_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->model_id = $s['model_id'] ?? '';
  }
}

class GetModelResponse {
  public ?StringWithLengthBetween1And256 $content_type;
  public ?StringWithLengthBetween0And1024 $description;
  public ?Id $model_id;
  public ?StringWithLengthBetween1And128 $name;
  public ?StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
    ?'content_type' => ?StringWithLengthBetween1And256,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'model_id' => ?Id,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'schema' => ?StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->content_type = $s['content_type'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->model_id = $s['model_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->schema = $s['schema'] ?? '';
  }
}

class GetModelTemplateRequest {
  public ?__string $api_id;
  public ?__string $model_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'model_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->model_id = $s['model_id'] ?? '';
  }
}

class GetModelTemplateResponse {
  public ?__string $value;

  public function __construct(shape(
    ?'value' => ?__string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

class GetModelsRequest {
  public ?__string $api_id;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetModelsResponse {
  public ?__listOfModel $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfModel,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetRouteRequest {
  public ?__string $api_id;
  public ?__string $route_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'route_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->route_id = $s['route_id'] ?? '';
  }
}

class GetRouteResponseRequest {
  public ?__string $api_id;
  public ?__string $route_id;
  public ?__string $route_response_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'route_id' => ?__string,
    ?'route_response_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->route_id = $s['route_id'] ?? '';
    $this->route_response_id = $s['route_response_id'] ?? '';
  }
}

class GetRouteResponseResponse {
  public ?SelectionExpression $model_selection_expression;
  public ?RouteModels $response_models;
  public ?RouteParameters $response_parameters;
  public ?Id $route_response_id;
  public ?SelectionKey $route_response_key;

  public function __construct(shape(
    ?'model_selection_expression' => ?SelectionExpression,
    ?'response_models' => ?RouteModels,
    ?'response_parameters' => ?RouteParameters,
    ?'route_response_id' => ?Id,
    ?'route_response_key' => ?SelectionKey,
  ) $s = shape()) {
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->response_models = $s['response_models'] ?? dict[];
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->route_response_id = $s['route_response_id'] ?? '';
    $this->route_response_key = $s['route_response_key'] ?? '';
  }
}

class GetRouteResponsesRequest {
  public ?__string $api_id;
  public ?__string $max_results;
  public ?__string $next_token;
  public ?__string $route_id;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
    ?'route_id' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->route_id = $s['route_id'] ?? '';
  }
}

class GetRouteResponsesResponse {
  public ?__listOfRouteResponse $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfRouteResponse,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetRouteResult {
  public ?__boolean $api_gateway_managed;
  public ?__boolean $api_key_required;
  public ?AuthorizationScopes $authorization_scopes;
  public ?AuthorizationType $authorization_type;
  public ?Id $authorizer_id;
  public ?SelectionExpression $model_selection_expression;
  public ?StringWithLengthBetween1And64 $operation_name;
  public ?RouteModels $request_models;
  public ?RouteParameters $request_parameters;
  public ?Id $route_id;
  public ?SelectionKey $route_key;
  public ?SelectionExpression $route_response_selection_expression;
  public ?StringWithLengthBetween1And128 $target;

  public function __construct(shape(
    ?'api_gateway_managed' => ?__boolean,
    ?'api_key_required' => ?__boolean,
    ?'authorization_scopes' => ?AuthorizationScopes,
    ?'authorization_type' => ?AuthorizationType,
    ?'authorizer_id' => ?Id,
    ?'model_selection_expression' => ?SelectionExpression,
    ?'operation_name' => ?StringWithLengthBetween1And64,
    ?'request_models' => ?RouteModels,
    ?'request_parameters' => ?RouteParameters,
    ?'route_id' => ?Id,
    ?'route_key' => ?SelectionKey,
    ?'route_response_selection_expression' => ?SelectionExpression,
    ?'target' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_gateway_managed = $s['api_gateway_managed'] ?? false;
    $this->api_key_required = $s['api_key_required'] ?? false;
    $this->authorization_scopes = $s['authorization_scopes'] ?? vec[];
    $this->authorization_type = $s['authorization_type'] ?? '';
    $this->authorizer_id = $s['authorizer_id'] ?? '';
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->operation_name = $s['operation_name'] ?? '';
    $this->request_models = $s['request_models'] ?? dict[];
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->route_id = $s['route_id'] ?? '';
    $this->route_key = $s['route_key'] ?? '';
    $this->route_response_selection_expression = $s['route_response_selection_expression'] ?? '';
    $this->target = $s['target'] ?? '';
  }
}

class GetRoutesRequest {
  public ?__string $api_id;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetRoutesResponse {
  public ?__listOfRoute $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfRoute,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetStageRequest {
  public ?__string $api_id;
  public ?__string $stage_name;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'stage_name' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->stage_name = $s['stage_name'] ?? '';
  }
}

class GetStageResponse {
  public ?AccessLogSettings $access_log_settings;
  public ?__boolean $api_gateway_managed;
  public ?__boolean $auto_deploy;
  public ?Id $client_certificate_id;
  public ?__timestampIso8601 $created_date;
  public ?RouteSettings $default_route_settings;
  public ?Id $deployment_id;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__string $last_deployment_status_message;
  public ?__timestampIso8601 $last_updated_date;
  public ?RouteSettingsMap $route_settings;
  public ?StringWithLengthBetween1And128 $stage_name;
  public ?StageVariablesMap $stage_variables;
  public ?Tags $tags;

  public function __construct(shape(
    ?'access_log_settings' => ?AccessLogSettings,
    ?'api_gateway_managed' => ?__boolean,
    ?'auto_deploy' => ?__boolean,
    ?'client_certificate_id' => ?Id,
    ?'created_date' => ?__timestampIso8601,
    ?'default_route_settings' => ?RouteSettings,
    ?'deployment_id' => ?Id,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'last_deployment_status_message' => ?__string,
    ?'last_updated_date' => ?__timestampIso8601,
    ?'route_settings' => ?RouteSettingsMap,
    ?'stage_name' => ?StringWithLengthBetween1And128,
    ?'stage_variables' => ?StageVariablesMap,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->access_log_settings = $s['access_log_settings'] ?? null;
    $this->api_gateway_managed = $s['api_gateway_managed'] ?? false;
    $this->auto_deploy = $s['auto_deploy'] ?? false;
    $this->client_certificate_id = $s['client_certificate_id'] ?? '';
    $this->created_date = $s['created_date'] ?? 0;
    $this->default_route_settings = $s['default_route_settings'] ?? null;
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->last_deployment_status_message = $s['last_deployment_status_message'] ?? '';
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->route_settings = $s['route_settings'] ?? dict[];
    $this->stage_name = $s['stage_name'] ?? '';
    $this->stage_variables = $s['stage_variables'] ?? dict[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class GetStagesRequest {
  public ?__string $api_id;
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetStagesResponse {
  public ?__listOfStage $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfStage,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetTagsRequest {
  public ?__string $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class GetTagsResponse {
  public ?Tags $tags;

  public function __construct(shape(
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class GetVpcLinkRequest {
  public ?__string $vpc_link_id;

  public function __construct(shape(
    ?'vpc_link_id' => ?__string,
  ) $s = shape()) {
    $this->vpc_link_id = $s['vpc_link_id'] ?? '';
  }
}

class GetVpcLinkResponse {
  public ?__timestampIso8601 $created_date;
  public ?StringWithLengthBetween1And128 $name;
  public ?SecurityGroupIdList $security_group_ids;
  public ?SubnetIdList $subnet_ids;
  public ?Tags $tags;
  public ?Id $vpc_link_id;
  public ?VpcLinkStatus $vpc_link_status;
  public ?StringWithLengthBetween0And1024 $vpc_link_status_message;
  public ?VpcLinkVersion $vpc_link_version;

  public function __construct(shape(
    ?'created_date' => ?__timestampIso8601,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'security_group_ids' => ?SecurityGroupIdList,
    ?'subnet_ids' => ?SubnetIdList,
    ?'tags' => ?Tags,
    ?'vpc_link_id' => ?Id,
    ?'vpc_link_status' => ?VpcLinkStatus,
    ?'vpc_link_status_message' => ?StringWithLengthBetween0And1024,
    ?'vpc_link_version' => ?VpcLinkVersion,
  ) $s = shape()) {
    $this->created_date = $s['created_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->vpc_link_id = $s['vpc_link_id'] ?? '';
    $this->vpc_link_status = $s['vpc_link_status'] ?? '';
    $this->vpc_link_status_message = $s['vpc_link_status_message'] ?? '';
    $this->vpc_link_version = $s['vpc_link_version'] ?? '';
  }
}

class GetVpcLinksRequest {
  public ?__string $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'max_results' => ?__string,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetVpcLinksResponse {
  public ?__listOfVpcLink $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfVpcLink,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type Id = string;

type IdentitySourceList = vec<__string>;

class ImportApiInput {
  public ?__string $body;

  public function __construct(shape(
    ?'body' => ?__string,
  ) $s = shape()) {
    $this->body = $s['body'] ?? '';
  }
}

class ImportApiRequest {
  public ?__string $basepath;
  public ?__string $body;
  public ?__boolean $fail_on_warnings;

  public function __construct(shape(
    ?'basepath' => ?__string,
    ?'body' => ?__string,
    ?'fail_on_warnings' => ?__boolean,
  ) $s = shape()) {
    $this->basepath = $s['basepath'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->fail_on_warnings = $s['fail_on_warnings'] ?? false;
  }
}

class ImportApiResponse {
  public ?__string $api_endpoint;
  public ?Id $api_id;
  public ?SelectionExpression $api_key_selection_expression;
  public ?Cors $cors_configuration;
  public ?__timestampIso8601 $created_date;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__boolean $disable_schema_validation;
  public ?__listOf__string $import_info;
  public ?StringWithLengthBetween1And128 $name;
  public ?ProtocolType $protocol_type;
  public ?SelectionExpression $route_selection_expression;
  public ?Tags $tags;
  public ?StringWithLengthBetween1And64 $version;
  public ?__listOf__string $warnings;

  public function __construct(shape(
    ?'api_endpoint' => ?__string,
    ?'api_id' => ?Id,
    ?'api_key_selection_expression' => ?SelectionExpression,
    ?'cors_configuration' => ?Cors,
    ?'created_date' => ?__timestampIso8601,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'disable_schema_validation' => ?__boolean,
    ?'import_info' => ?__listOf__string,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'protocol_type' => ?ProtocolType,
    ?'route_selection_expression' => ?SelectionExpression,
    ?'tags' => ?Tags,
    ?'version' => ?StringWithLengthBetween1And64,
    ?'warnings' => ?__listOf__string,
  ) $s = shape()) {
    $this->api_endpoint = $s['api_endpoint'] ?? '';
    $this->api_id = $s['api_id'] ?? '';
    $this->api_key_selection_expression = $s['api_key_selection_expression'] ?? '';
    $this->cors_configuration = $s['cors_configuration'] ?? null;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->disable_schema_validation = $s['disable_schema_validation'] ?? false;
    $this->import_info = $s['import_info'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->protocol_type = $s['protocol_type'] ?? '';
    $this->route_selection_expression = $s['route_selection_expression'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->version = $s['version'] ?? '';
    $this->warnings = $s['warnings'] ?? vec[];
  }
}

type IntegerWithLengthBetween0And3600 = int;

type IntegerWithLengthBetween50And30000 = int;

type IntegerWithLengthBetweenMinus1And86400 = int;

class Integration {
  public ?__boolean $api_gateway_managed;
  public ?StringWithLengthBetween1And1024 $connection_id;
  public ?ConnectionType $connection_type;
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?Arn $credentials_arn;
  public ?StringWithLengthBetween0And1024 $description;
  public ?Id $integration_id;
  public ?StringWithLengthBetween1And64 $integration_method;
  public ?SelectionExpression $integration_response_selection_expression;
  public ?IntegrationType $integration_type;
  public ?UriWithLengthBetween1And2048 $integration_uri;
  public ?PassthroughBehavior $passthrough_behavior;
  public ?StringWithLengthBetween1And64 $payload_format_version;
  public ?IntegrationParameters $request_parameters;
  public ?TemplateMap $request_templates;
  public ?SelectionExpression $template_selection_expression;
  public ?IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public ?TlsConfig $tls_config;

  public function __construct(shape(
    ?'api_gateway_managed' => ?__boolean,
    ?'connection_id' => ?StringWithLengthBetween1And1024,
    ?'connection_type' => ?ConnectionType,
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'credentials_arn' => ?Arn,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'integration_id' => ?Id,
    ?'integration_method' => ?StringWithLengthBetween1And64,
    ?'integration_response_selection_expression' => ?SelectionExpression,
    ?'integration_type' => ?IntegrationType,
    ?'integration_uri' => ?UriWithLengthBetween1And2048,
    ?'passthrough_behavior' => ?PassthroughBehavior,
    ?'payload_format_version' => ?StringWithLengthBetween1And64,
    ?'request_parameters' => ?IntegrationParameters,
    ?'request_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
    ?'timeout_in_millis' => ?IntegerWithLengthBetween50And30000,
    ?'tls_config' => ?TlsConfig,
  ) $s = shape()) {
    $this->api_gateway_managed = $s['api_gateway_managed'] ?? false;
    $this->connection_id = $s['connection_id'] ?? '';
    $this->connection_type = $s['connection_type'] ?? '';
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->credentials_arn = $s['credentials_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->integration_id = $s['integration_id'] ?? '';
    $this->integration_method = $s['integration_method'] ?? '';
    $this->integration_response_selection_expression = $s['integration_response_selection_expression'] ?? '';
    $this->integration_type = $s['integration_type'] ?? '';
    $this->integration_uri = $s['integration_uri'] ?? '';
    $this->passthrough_behavior = $s['passthrough_behavior'] ?? '';
    $this->payload_format_version = $s['payload_format_version'] ?? '';
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->request_templates = $s['request_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
    $this->timeout_in_millis = $s['timeout_in_millis'] ?? 0;
    $this->tls_config = $s['tls_config'] ?? null;
  }
}

type IntegrationParameters = dict<__string, StringWithLengthBetween1And512>;

class IntegrationResponse {
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?Id $integration_response_id;
  public ?SelectionKey $integration_response_key;
  public ?IntegrationParameters $response_parameters;
  public ?TemplateMap $response_templates;
  public ?SelectionExpression $template_selection_expression;

  public function __construct(shape(
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'integration_response_id' => ?Id,
    ?'integration_response_key' => ?SelectionKey,
    ?'response_parameters' => ?IntegrationParameters,
    ?'response_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
  ) $s = shape()) {
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->integration_response_id = $s['integration_response_id'] ?? '';
    $this->integration_response_key = $s['integration_response_key'] ?? '';
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->response_templates = $s['response_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
  }
}

class IntegrationResponses {
  public ?__listOfIntegrationResponse $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfIntegrationResponse,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type IntegrationType = string;

class Integrations {
  public ?__listOfIntegration $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfIntegration,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class JWTConfiguration {
  public ?__listOf__string $audience;
  public ?UriWithLengthBetween1And2048 $issuer;

  public function __construct(shape(
    ?'audience' => ?__listOf__string,
    ?'issuer' => ?UriWithLengthBetween1And2048,
  ) $s = shape()) {
    $this->audience = $s['audience'] ?? vec[];
    $this->issuer = $s['issuer'] ?? '';
  }
}

class LimitExceededException {
  public ?__string $limit_type;
  public ?__string $message;

  public function __construct(shape(
    ?'limit_type' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->limit_type = $s['limit_type'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type LoggingLevel = string;

class Model {
  public ?StringWithLengthBetween1And256 $content_type;
  public ?StringWithLengthBetween0And1024 $description;
  public ?Id $model_id;
  public ?StringWithLengthBetween1And128 $name;
  public ?StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
    ?'content_type' => ?StringWithLengthBetween1And256,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'model_id' => ?Id,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'schema' => ?StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->content_type = $s['content_type'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->model_id = $s['model_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->schema = $s['schema'] ?? '';
  }
}

class Models {
  public ?__listOfModel $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfModel,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type NextToken = string;

class NotFoundException {
  public ?__string $message;
  public ?__string $resource_type;

  public function __construct(shape(
    ?'message' => ?__string,
    ?'resource_type' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ParameterConstraints {
  public ?__boolean $required;

  public function __construct(shape(
    ?'required' => ?__boolean,
  ) $s = shape()) {
    $this->required = $s['required'] ?? false;
  }
}

type PassthroughBehavior = string;

type ProtocolType = string;

class ReimportApiInput {
  public ?__string $body;

  public function __construct(shape(
    ?'body' => ?__string,
  ) $s = shape()) {
    $this->body = $s['body'] ?? '';
  }
}

class ReimportApiRequest {
  public ?__string $api_id;
  public ?__string $basepath;
  public ?__string $body;
  public ?__boolean $fail_on_warnings;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'basepath' => ?__string,
    ?'body' => ?__string,
    ?'fail_on_warnings' => ?__boolean,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->basepath = $s['basepath'] ?? '';
    $this->body = $s['body'] ?? '';
    $this->fail_on_warnings = $s['fail_on_warnings'] ?? false;
  }
}

class ReimportApiResponse {
  public ?__string $api_endpoint;
  public ?Id $api_id;
  public ?SelectionExpression $api_key_selection_expression;
  public ?Cors $cors_configuration;
  public ?__timestampIso8601 $created_date;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__boolean $disable_schema_validation;
  public ?__listOf__string $import_info;
  public ?StringWithLengthBetween1And128 $name;
  public ?ProtocolType $protocol_type;
  public ?SelectionExpression $route_selection_expression;
  public ?Tags $tags;
  public ?StringWithLengthBetween1And64 $version;
  public ?__listOf__string $warnings;

  public function __construct(shape(
    ?'api_endpoint' => ?__string,
    ?'api_id' => ?Id,
    ?'api_key_selection_expression' => ?SelectionExpression,
    ?'cors_configuration' => ?Cors,
    ?'created_date' => ?__timestampIso8601,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'disable_schema_validation' => ?__boolean,
    ?'import_info' => ?__listOf__string,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'protocol_type' => ?ProtocolType,
    ?'route_selection_expression' => ?SelectionExpression,
    ?'tags' => ?Tags,
    ?'version' => ?StringWithLengthBetween1And64,
    ?'warnings' => ?__listOf__string,
  ) $s = shape()) {
    $this->api_endpoint = $s['api_endpoint'] ?? '';
    $this->api_id = $s['api_id'] ?? '';
    $this->api_key_selection_expression = $s['api_key_selection_expression'] ?? '';
    $this->cors_configuration = $s['cors_configuration'] ?? null;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->disable_schema_validation = $s['disable_schema_validation'] ?? false;
    $this->import_info = $s['import_info'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->protocol_type = $s['protocol_type'] ?? '';
    $this->route_selection_expression = $s['route_selection_expression'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->version = $s['version'] ?? '';
    $this->warnings = $s['warnings'] ?? vec[];
  }
}

class Route {
  public ?__boolean $api_gateway_managed;
  public ?__boolean $api_key_required;
  public ?AuthorizationScopes $authorization_scopes;
  public ?AuthorizationType $authorization_type;
  public ?Id $authorizer_id;
  public ?SelectionExpression $model_selection_expression;
  public ?StringWithLengthBetween1And64 $operation_name;
  public ?RouteModels $request_models;
  public ?RouteParameters $request_parameters;
  public ?Id $route_id;
  public ?SelectionKey $route_key;
  public ?SelectionExpression $route_response_selection_expression;
  public ?StringWithLengthBetween1And128 $target;

  public function __construct(shape(
    ?'api_gateway_managed' => ?__boolean,
    ?'api_key_required' => ?__boolean,
    ?'authorization_scopes' => ?AuthorizationScopes,
    ?'authorization_type' => ?AuthorizationType,
    ?'authorizer_id' => ?Id,
    ?'model_selection_expression' => ?SelectionExpression,
    ?'operation_name' => ?StringWithLengthBetween1And64,
    ?'request_models' => ?RouteModels,
    ?'request_parameters' => ?RouteParameters,
    ?'route_id' => ?Id,
    ?'route_key' => ?SelectionKey,
    ?'route_response_selection_expression' => ?SelectionExpression,
    ?'target' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_gateway_managed = $s['api_gateway_managed'] ?? false;
    $this->api_key_required = $s['api_key_required'] ?? false;
    $this->authorization_scopes = $s['authorization_scopes'] ?? vec[];
    $this->authorization_type = $s['authorization_type'] ?? '';
    $this->authorizer_id = $s['authorizer_id'] ?? '';
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->operation_name = $s['operation_name'] ?? '';
    $this->request_models = $s['request_models'] ?? dict[];
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->route_id = $s['route_id'] ?? '';
    $this->route_key = $s['route_key'] ?? '';
    $this->route_response_selection_expression = $s['route_response_selection_expression'] ?? '';
    $this->target = $s['target'] ?? '';
  }
}

type RouteModels = dict<__string, StringWithLengthBetween1And128>;

type RouteParameters = dict<__string, ParameterConstraints>;

class RouteResponse {
  public ?SelectionExpression $model_selection_expression;
  public ?RouteModels $response_models;
  public ?RouteParameters $response_parameters;
  public ?Id $route_response_id;
  public ?SelectionKey $route_response_key;

  public function __construct(shape(
    ?'model_selection_expression' => ?SelectionExpression,
    ?'response_models' => ?RouteModels,
    ?'response_parameters' => ?RouteParameters,
    ?'route_response_id' => ?Id,
    ?'route_response_key' => ?SelectionKey,
  ) $s = shape()) {
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->response_models = $s['response_models'] ?? dict[];
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->route_response_id = $s['route_response_id'] ?? '';
    $this->route_response_key = $s['route_response_key'] ?? '';
  }
}

class RouteResponses {
  public ?__listOfRouteResponse $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfRouteResponse,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class RouteSettings {
  public ?__boolean $data_trace_enabled;
  public ?__boolean $detailed_metrics_enabled;
  public ?LoggingLevel $logging_level;
  public ?__integer $throttling_burst_limit;
  public ?__double $throttling_rate_limit;

  public function __construct(shape(
    ?'data_trace_enabled' => ?__boolean,
    ?'detailed_metrics_enabled' => ?__boolean,
    ?'logging_level' => ?LoggingLevel,
    ?'throttling_burst_limit' => ?__integer,
    ?'throttling_rate_limit' => ?__double,
  ) $s = shape()) {
    $this->data_trace_enabled = $s['data_trace_enabled'] ?? false;
    $this->detailed_metrics_enabled = $s['detailed_metrics_enabled'] ?? false;
    $this->logging_level = $s['logging_level'] ?? '';
    $this->throttling_burst_limit = $s['throttling_burst_limit'] ?? 0;
    $this->throttling_rate_limit = $s['throttling_rate_limit'] ?? 0.0;
  }
}

type RouteSettingsMap = dict<__string, RouteSettings>;

class Routes {
  public ?__listOfRoute $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfRoute,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type SecurityGroupIdList = vec<__string>;

type SecurityPolicy = string;

type SelectionExpression = string;

type SelectionKey = string;

class Stage {
  public ?AccessLogSettings $access_log_settings;
  public ?__boolean $api_gateway_managed;
  public ?__boolean $auto_deploy;
  public ?Id $client_certificate_id;
  public ?__timestampIso8601 $created_date;
  public ?RouteSettings $default_route_settings;
  public ?Id $deployment_id;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__string $last_deployment_status_message;
  public ?__timestampIso8601 $last_updated_date;
  public ?RouteSettingsMap $route_settings;
  public ?StringWithLengthBetween1And128 $stage_name;
  public ?StageVariablesMap $stage_variables;
  public ?Tags $tags;

  public function __construct(shape(
    ?'access_log_settings' => ?AccessLogSettings,
    ?'api_gateway_managed' => ?__boolean,
    ?'auto_deploy' => ?__boolean,
    ?'client_certificate_id' => ?Id,
    ?'created_date' => ?__timestampIso8601,
    ?'default_route_settings' => ?RouteSettings,
    ?'deployment_id' => ?Id,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'last_deployment_status_message' => ?__string,
    ?'last_updated_date' => ?__timestampIso8601,
    ?'route_settings' => ?RouteSettingsMap,
    ?'stage_name' => ?StringWithLengthBetween1And128,
    ?'stage_variables' => ?StageVariablesMap,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->access_log_settings = $s['access_log_settings'] ?? null;
    $this->api_gateway_managed = $s['api_gateway_managed'] ?? false;
    $this->auto_deploy = $s['auto_deploy'] ?? false;
    $this->client_certificate_id = $s['client_certificate_id'] ?? '';
    $this->created_date = $s['created_date'] ?? 0;
    $this->default_route_settings = $s['default_route_settings'] ?? null;
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->last_deployment_status_message = $s['last_deployment_status_message'] ?? '';
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->route_settings = $s['route_settings'] ?? dict[];
    $this->stage_name = $s['stage_name'] ?? '';
    $this->stage_variables = $s['stage_variables'] ?? dict[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

type StageVariablesMap = dict<__string, StringWithLengthBetween0And2048>;

class Stages {
  public ?__listOfStage $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfStage,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
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
  public ?Tags $tags;

  public function __construct(shape(
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class TagResourceRequest {
  public ?__string $resource_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Tags = dict<__string, StringWithLengthBetween1And1600>;

class Template {
  public ?__string $value;

  public function __construct(shape(
    ?'value' => ?__string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

type TemplateMap = dict<__string, StringWithLengthBetween0And32K>;

class TlsConfig {
  public ?StringWithLengthBetween1And512 $server_name_to_verify;

  public function __construct(shape(
    ?'server_name_to_verify' => ?StringWithLengthBetween1And512,
  ) $s = shape()) {
    $this->server_name_to_verify = $s['server_name_to_verify'] ?? '';
  }
}

class TlsConfigInput {
  public ?StringWithLengthBetween1And512 $server_name_to_verify;

  public function __construct(shape(
    ?'server_name_to_verify' => ?StringWithLengthBetween1And512,
  ) $s = shape()) {
    $this->server_name_to_verify = $s['server_name_to_verify'] ?? '';
  }
}

class TooManyRequestsException {
  public ?__string $limit_type;
  public ?__string $message;

  public function __construct(shape(
    ?'limit_type' => ?__string,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->limit_type = $s['limit_type'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public ?__string $resource_arn;
  public ?__listOf__string $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
    ?'tag_keys' => ?__listOf__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UpdateApiInput {
  public ?SelectionExpression $api_key_selection_expression;
  public ?Cors $cors_configuration;
  public ?Arn $credentials_arn;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__boolean $disable_schema_validation;
  public ?StringWithLengthBetween1And128 $name;
  public ?SelectionKey $route_key;
  public ?SelectionExpression $route_selection_expression;
  public ?UriWithLengthBetween1And2048 $target;
  public ?StringWithLengthBetween1And64 $version;

  public function __construct(shape(
    ?'api_key_selection_expression' => ?SelectionExpression,
    ?'cors_configuration' => ?Cors,
    ?'credentials_arn' => ?Arn,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'disable_schema_validation' => ?__boolean,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'route_key' => ?SelectionKey,
    ?'route_selection_expression' => ?SelectionExpression,
    ?'target' => ?UriWithLengthBetween1And2048,
    ?'version' => ?StringWithLengthBetween1And64,
  ) $s = shape()) {
    $this->api_key_selection_expression = $s['api_key_selection_expression'] ?? '';
    $this->cors_configuration = $s['cors_configuration'] ?? null;
    $this->credentials_arn = $s['credentials_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->disable_schema_validation = $s['disable_schema_validation'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->route_key = $s['route_key'] ?? '';
    $this->route_selection_expression = $s['route_selection_expression'] ?? '';
    $this->target = $s['target'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class UpdateApiMappingInput {
  public ?Id $api_id;
  public ?SelectionKey $api_mapping_key;
  public ?StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
    ?'api_id' => ?Id,
    ?'api_mapping_key' => ?SelectionKey,
    ?'stage' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->api_mapping_key = $s['api_mapping_key'] ?? '';
    $this->stage = $s['stage'] ?? '';
  }
}

class UpdateApiMappingRequest {
  public ?Id $api_id;
  public ?__string $api_mapping_id;
  public ?SelectionKey $api_mapping_key;
  public ?__string $domain_name;
  public ?StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
    ?'api_id' => ?Id,
    ?'api_mapping_id' => ?__string,
    ?'api_mapping_key' => ?SelectionKey,
    ?'domain_name' => ?__string,
    ?'stage' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->api_mapping_id = $s['api_mapping_id'] ?? '';
    $this->api_mapping_key = $s['api_mapping_key'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->stage = $s['stage'] ?? '';
  }
}

class UpdateApiMappingResponse {
  public ?Id $api_id;
  public ?Id $api_mapping_id;
  public ?SelectionKey $api_mapping_key;
  public ?StringWithLengthBetween1And128 $stage;

  public function __construct(shape(
    ?'api_id' => ?Id,
    ?'api_mapping_id' => ?Id,
    ?'api_mapping_key' => ?SelectionKey,
    ?'stage' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->api_mapping_id = $s['api_mapping_id'] ?? '';
    $this->api_mapping_key = $s['api_mapping_key'] ?? '';
    $this->stage = $s['stage'] ?? '';
  }
}

class UpdateApiRequest {
  public ?__string $api_id;
  public ?SelectionExpression $api_key_selection_expression;
  public ?Cors $cors_configuration;
  public ?Arn $credentials_arn;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__boolean $disable_schema_validation;
  public ?StringWithLengthBetween1And128 $name;
  public ?SelectionKey $route_key;
  public ?SelectionExpression $route_selection_expression;
  public ?UriWithLengthBetween1And2048 $target;
  public ?StringWithLengthBetween1And64 $version;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'api_key_selection_expression' => ?SelectionExpression,
    ?'cors_configuration' => ?Cors,
    ?'credentials_arn' => ?Arn,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'disable_schema_validation' => ?__boolean,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'route_key' => ?SelectionKey,
    ?'route_selection_expression' => ?SelectionExpression,
    ?'target' => ?UriWithLengthBetween1And2048,
    ?'version' => ?StringWithLengthBetween1And64,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->api_key_selection_expression = $s['api_key_selection_expression'] ?? '';
    $this->cors_configuration = $s['cors_configuration'] ?? null;
    $this->credentials_arn = $s['credentials_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->disable_schema_validation = $s['disable_schema_validation'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->route_key = $s['route_key'] ?? '';
    $this->route_selection_expression = $s['route_selection_expression'] ?? '';
    $this->target = $s['target'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class UpdateApiResponse {
  public ?__string $api_endpoint;
  public ?Id $api_id;
  public ?SelectionExpression $api_key_selection_expression;
  public ?Cors $cors_configuration;
  public ?__timestampIso8601 $created_date;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__boolean $disable_schema_validation;
  public ?__listOf__string $import_info;
  public ?StringWithLengthBetween1And128 $name;
  public ?ProtocolType $protocol_type;
  public ?SelectionExpression $route_selection_expression;
  public ?Tags $tags;
  public ?StringWithLengthBetween1And64 $version;
  public ?__listOf__string $warnings;

  public function __construct(shape(
    ?'api_endpoint' => ?__string,
    ?'api_id' => ?Id,
    ?'api_key_selection_expression' => ?SelectionExpression,
    ?'cors_configuration' => ?Cors,
    ?'created_date' => ?__timestampIso8601,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'disable_schema_validation' => ?__boolean,
    ?'import_info' => ?__listOf__string,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'protocol_type' => ?ProtocolType,
    ?'route_selection_expression' => ?SelectionExpression,
    ?'tags' => ?Tags,
    ?'version' => ?StringWithLengthBetween1And64,
    ?'warnings' => ?__listOf__string,
  ) $s = shape()) {
    $this->api_endpoint = $s['api_endpoint'] ?? '';
    $this->api_id = $s['api_id'] ?? '';
    $this->api_key_selection_expression = $s['api_key_selection_expression'] ?? '';
    $this->cors_configuration = $s['cors_configuration'] ?? null;
    $this->created_date = $s['created_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->disable_schema_validation = $s['disable_schema_validation'] ?? false;
    $this->import_info = $s['import_info'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->protocol_type = $s['protocol_type'] ?? '';
    $this->route_selection_expression = $s['route_selection_expression'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->version = $s['version'] ?? '';
    $this->warnings = $s['warnings'] ?? vec[];
  }
}

class UpdateAuthorizerInput {
  public ?Arn $authorizer_credentials_arn;
  public ?IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public ?AuthorizerType $authorizer_type;
  public ?UriWithLengthBetween1And2048 $authorizer_uri;
  public ?IdentitySourceList $identity_source;
  public ?StringWithLengthBetween0And1024 $identity_validation_expression;
  public ?JWTConfiguration $jwt_configuration;
  public ?StringWithLengthBetween1And128 $name;

  public function __construct(shape(
    ?'authorizer_credentials_arn' => ?Arn,
    ?'authorizer_result_ttl_in_seconds' => ?IntegerWithLengthBetween0And3600,
    ?'authorizer_type' => ?AuthorizerType,
    ?'authorizer_uri' => ?UriWithLengthBetween1And2048,
    ?'identity_source' => ?IdentitySourceList,
    ?'identity_validation_expression' => ?StringWithLengthBetween0And1024,
    ?'jwt_configuration' => ?JWTConfiguration,
    ?'name' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->authorizer_credentials_arn = $s['authorizer_credentials_arn'] ?? '';
    $this->authorizer_result_ttl_in_seconds = $s['authorizer_result_ttl_in_seconds'] ?? 0;
    $this->authorizer_type = $s['authorizer_type'] ?? '';
    $this->authorizer_uri = $s['authorizer_uri'] ?? '';
    $this->identity_source = $s['identity_source'] ?? vec[];
    $this->identity_validation_expression = $s['identity_validation_expression'] ?? '';
    $this->jwt_configuration = $s['jwt_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

class UpdateAuthorizerRequest {
  public ?__string $api_id;
  public ?Arn $authorizer_credentials_arn;
  public ?__string $authorizer_id;
  public ?IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public ?AuthorizerType $authorizer_type;
  public ?UriWithLengthBetween1And2048 $authorizer_uri;
  public ?IdentitySourceList $identity_source;
  public ?StringWithLengthBetween0And1024 $identity_validation_expression;
  public ?JWTConfiguration $jwt_configuration;
  public ?StringWithLengthBetween1And128 $name;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'authorizer_credentials_arn' => ?Arn,
    ?'authorizer_id' => ?__string,
    ?'authorizer_result_ttl_in_seconds' => ?IntegerWithLengthBetween0And3600,
    ?'authorizer_type' => ?AuthorizerType,
    ?'authorizer_uri' => ?UriWithLengthBetween1And2048,
    ?'identity_source' => ?IdentitySourceList,
    ?'identity_validation_expression' => ?StringWithLengthBetween0And1024,
    ?'jwt_configuration' => ?JWTConfiguration,
    ?'name' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->authorizer_credentials_arn = $s['authorizer_credentials_arn'] ?? '';
    $this->authorizer_id = $s['authorizer_id'] ?? '';
    $this->authorizer_result_ttl_in_seconds = $s['authorizer_result_ttl_in_seconds'] ?? 0;
    $this->authorizer_type = $s['authorizer_type'] ?? '';
    $this->authorizer_uri = $s['authorizer_uri'] ?? '';
    $this->identity_source = $s['identity_source'] ?? vec[];
    $this->identity_validation_expression = $s['identity_validation_expression'] ?? '';
    $this->jwt_configuration = $s['jwt_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

class UpdateAuthorizerResponse {
  public ?Arn $authorizer_credentials_arn;
  public ?Id $authorizer_id;
  public ?IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public ?AuthorizerType $authorizer_type;
  public ?UriWithLengthBetween1And2048 $authorizer_uri;
  public ?IdentitySourceList $identity_source;
  public ?StringWithLengthBetween0And1024 $identity_validation_expression;
  public ?JWTConfiguration $jwt_configuration;
  public ?StringWithLengthBetween1And128 $name;

  public function __construct(shape(
    ?'authorizer_credentials_arn' => ?Arn,
    ?'authorizer_id' => ?Id,
    ?'authorizer_result_ttl_in_seconds' => ?IntegerWithLengthBetween0And3600,
    ?'authorizer_type' => ?AuthorizerType,
    ?'authorizer_uri' => ?UriWithLengthBetween1And2048,
    ?'identity_source' => ?IdentitySourceList,
    ?'identity_validation_expression' => ?StringWithLengthBetween0And1024,
    ?'jwt_configuration' => ?JWTConfiguration,
    ?'name' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->authorizer_credentials_arn = $s['authorizer_credentials_arn'] ?? '';
    $this->authorizer_id = $s['authorizer_id'] ?? '';
    $this->authorizer_result_ttl_in_seconds = $s['authorizer_result_ttl_in_seconds'] ?? 0;
    $this->authorizer_type = $s['authorizer_type'] ?? '';
    $this->authorizer_uri = $s['authorizer_uri'] ?? '';
    $this->identity_source = $s['identity_source'] ?? vec[];
    $this->identity_validation_expression = $s['identity_validation_expression'] ?? '';
    $this->jwt_configuration = $s['jwt_configuration'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

class UpdateDeploymentInput {
  public ?StringWithLengthBetween0And1024 $description;

  public function __construct(shape(
    ?'description' => ?StringWithLengthBetween0And1024,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
  }
}

class UpdateDeploymentRequest {
  public ?__string $api_id;
  public ?__string $deployment_id;
  public ?StringWithLengthBetween0And1024 $description;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'deployment_id' => ?__string,
    ?'description' => ?StringWithLengthBetween0And1024,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

class UpdateDeploymentResponse {
  public ?__boolean $auto_deployed;
  public ?__timestampIso8601 $created_date;
  public ?Id $deployment_id;
  public ?DeploymentStatus $deployment_status;
  public ?__string $deployment_status_message;
  public ?StringWithLengthBetween0And1024 $description;

  public function __construct(shape(
    ?'auto_deployed' => ?__boolean,
    ?'created_date' => ?__timestampIso8601,
    ?'deployment_id' => ?Id,
    ?'deployment_status' => ?DeploymentStatus,
    ?'deployment_status_message' => ?__string,
    ?'description' => ?StringWithLengthBetween0And1024,
  ) $s = shape()) {
    $this->auto_deployed = $s['auto_deployed'] ?? false;
    $this->created_date = $s['created_date'] ?? 0;
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->deployment_status = $s['deployment_status'] ?? '';
    $this->deployment_status_message = $s['deployment_status_message'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

class UpdateDomainNameInput {
  public ?DomainNameConfigurations $domain_name_configurations;

  public function __construct(shape(
    ?'domain_name_configurations' => ?DomainNameConfigurations,
  ) $s = shape()) {
    $this->domain_name_configurations = $s['domain_name_configurations'] ?? vec[];
  }
}

class UpdateDomainNameRequest {
  public ?__string $domain_name;
  public ?DomainNameConfigurations $domain_name_configurations;

  public function __construct(shape(
    ?'domain_name' => ?__string,
    ?'domain_name_configurations' => ?DomainNameConfigurations,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->domain_name_configurations = $s['domain_name_configurations'] ?? vec[];
  }
}

class UpdateDomainNameResponse {
  public ?SelectionExpression $api_mapping_selection_expression;
  public ?StringWithLengthBetween1And512 $domain_name;
  public ?DomainNameConfigurations $domain_name_configurations;
  public ?Tags $tags;

  public function __construct(shape(
    ?'api_mapping_selection_expression' => ?SelectionExpression,
    ?'domain_name' => ?StringWithLengthBetween1And512,
    ?'domain_name_configurations' => ?DomainNameConfigurations,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->api_mapping_selection_expression = $s['api_mapping_selection_expression'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->domain_name_configurations = $s['domain_name_configurations'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class UpdateIntegrationInput {
  public ?StringWithLengthBetween1And1024 $connection_id;
  public ?ConnectionType $connection_type;
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?Arn $credentials_arn;
  public ?StringWithLengthBetween0And1024 $description;
  public ?StringWithLengthBetween1And64 $integration_method;
  public ?IntegrationType $integration_type;
  public ?UriWithLengthBetween1And2048 $integration_uri;
  public ?PassthroughBehavior $passthrough_behavior;
  public ?StringWithLengthBetween1And64 $payload_format_version;
  public ?IntegrationParameters $request_parameters;
  public ?TemplateMap $request_templates;
  public ?SelectionExpression $template_selection_expression;
  public ?IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public ?TlsConfigInput $tls_config;

  public function __construct(shape(
    ?'connection_id' => ?StringWithLengthBetween1And1024,
    ?'connection_type' => ?ConnectionType,
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'credentials_arn' => ?Arn,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'integration_method' => ?StringWithLengthBetween1And64,
    ?'integration_type' => ?IntegrationType,
    ?'integration_uri' => ?UriWithLengthBetween1And2048,
    ?'passthrough_behavior' => ?PassthroughBehavior,
    ?'payload_format_version' => ?StringWithLengthBetween1And64,
    ?'request_parameters' => ?IntegrationParameters,
    ?'request_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
    ?'timeout_in_millis' => ?IntegerWithLengthBetween50And30000,
    ?'tls_config' => ?TlsConfigInput,
  ) $s = shape()) {
    $this->connection_id = $s['connection_id'] ?? '';
    $this->connection_type = $s['connection_type'] ?? '';
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->credentials_arn = $s['credentials_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->integration_method = $s['integration_method'] ?? '';
    $this->integration_type = $s['integration_type'] ?? '';
    $this->integration_uri = $s['integration_uri'] ?? '';
    $this->passthrough_behavior = $s['passthrough_behavior'] ?? '';
    $this->payload_format_version = $s['payload_format_version'] ?? '';
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->request_templates = $s['request_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
    $this->timeout_in_millis = $s['timeout_in_millis'] ?? 0;
    $this->tls_config = $s['tls_config'] ?? null;
  }
}

class UpdateIntegrationRequest {
  public ?__string $api_id;
  public ?StringWithLengthBetween1And1024 $connection_id;
  public ?ConnectionType $connection_type;
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?Arn $credentials_arn;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__string $integration_id;
  public ?StringWithLengthBetween1And64 $integration_method;
  public ?IntegrationType $integration_type;
  public ?UriWithLengthBetween1And2048 $integration_uri;
  public ?PassthroughBehavior $passthrough_behavior;
  public ?StringWithLengthBetween1And64 $payload_format_version;
  public ?IntegrationParameters $request_parameters;
  public ?TemplateMap $request_templates;
  public ?SelectionExpression $template_selection_expression;
  public ?IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public ?TlsConfigInput $tls_config;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'connection_id' => ?StringWithLengthBetween1And1024,
    ?'connection_type' => ?ConnectionType,
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'credentials_arn' => ?Arn,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'integration_id' => ?__string,
    ?'integration_method' => ?StringWithLengthBetween1And64,
    ?'integration_type' => ?IntegrationType,
    ?'integration_uri' => ?UriWithLengthBetween1And2048,
    ?'passthrough_behavior' => ?PassthroughBehavior,
    ?'payload_format_version' => ?StringWithLengthBetween1And64,
    ?'request_parameters' => ?IntegrationParameters,
    ?'request_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
    ?'timeout_in_millis' => ?IntegerWithLengthBetween50And30000,
    ?'tls_config' => ?TlsConfigInput,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->connection_id = $s['connection_id'] ?? '';
    $this->connection_type = $s['connection_type'] ?? '';
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->credentials_arn = $s['credentials_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->integration_id = $s['integration_id'] ?? '';
    $this->integration_method = $s['integration_method'] ?? '';
    $this->integration_type = $s['integration_type'] ?? '';
    $this->integration_uri = $s['integration_uri'] ?? '';
    $this->passthrough_behavior = $s['passthrough_behavior'] ?? '';
    $this->payload_format_version = $s['payload_format_version'] ?? '';
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->request_templates = $s['request_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
    $this->timeout_in_millis = $s['timeout_in_millis'] ?? 0;
    $this->tls_config = $s['tls_config'] ?? null;
  }
}

class UpdateIntegrationResponseInput {
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?SelectionKey $integration_response_key;
  public ?IntegrationParameters $response_parameters;
  public ?TemplateMap $response_templates;
  public ?SelectionExpression $template_selection_expression;

  public function __construct(shape(
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'integration_response_key' => ?SelectionKey,
    ?'response_parameters' => ?IntegrationParameters,
    ?'response_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
  ) $s = shape()) {
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->integration_response_key = $s['integration_response_key'] ?? '';
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->response_templates = $s['response_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
  }
}

class UpdateIntegrationResponseRequest {
  public ?__string $api_id;
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?__string $integration_id;
  public ?__string $integration_response_id;
  public ?SelectionKey $integration_response_key;
  public ?IntegrationParameters $response_parameters;
  public ?TemplateMap $response_templates;
  public ?SelectionExpression $template_selection_expression;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'integration_id' => ?__string,
    ?'integration_response_id' => ?__string,
    ?'integration_response_key' => ?SelectionKey,
    ?'response_parameters' => ?IntegrationParameters,
    ?'response_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->integration_id = $s['integration_id'] ?? '';
    $this->integration_response_id = $s['integration_response_id'] ?? '';
    $this->integration_response_key = $s['integration_response_key'] ?? '';
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->response_templates = $s['response_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
  }
}

class UpdateIntegrationResponseResponse {
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?Id $integration_response_id;
  public ?SelectionKey $integration_response_key;
  public ?IntegrationParameters $response_parameters;
  public ?TemplateMap $response_templates;
  public ?SelectionExpression $template_selection_expression;

  public function __construct(shape(
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'integration_response_id' => ?Id,
    ?'integration_response_key' => ?SelectionKey,
    ?'response_parameters' => ?IntegrationParameters,
    ?'response_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
  ) $s = shape()) {
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->integration_response_id = $s['integration_response_id'] ?? '';
    $this->integration_response_key = $s['integration_response_key'] ?? '';
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->response_templates = $s['response_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
  }
}

class UpdateIntegrationResult {
  public ?__boolean $api_gateway_managed;
  public ?StringWithLengthBetween1And1024 $connection_id;
  public ?ConnectionType $connection_type;
  public ?ContentHandlingStrategy $content_handling_strategy;
  public ?Arn $credentials_arn;
  public ?StringWithLengthBetween0And1024 $description;
  public ?Id $integration_id;
  public ?StringWithLengthBetween1And64 $integration_method;
  public ?SelectionExpression $integration_response_selection_expression;
  public ?IntegrationType $integration_type;
  public ?UriWithLengthBetween1And2048 $integration_uri;
  public ?PassthroughBehavior $passthrough_behavior;
  public ?StringWithLengthBetween1And64 $payload_format_version;
  public ?IntegrationParameters $request_parameters;
  public ?TemplateMap $request_templates;
  public ?SelectionExpression $template_selection_expression;
  public ?IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public ?TlsConfig $tls_config;

  public function __construct(shape(
    ?'api_gateway_managed' => ?__boolean,
    ?'connection_id' => ?StringWithLengthBetween1And1024,
    ?'connection_type' => ?ConnectionType,
    ?'content_handling_strategy' => ?ContentHandlingStrategy,
    ?'credentials_arn' => ?Arn,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'integration_id' => ?Id,
    ?'integration_method' => ?StringWithLengthBetween1And64,
    ?'integration_response_selection_expression' => ?SelectionExpression,
    ?'integration_type' => ?IntegrationType,
    ?'integration_uri' => ?UriWithLengthBetween1And2048,
    ?'passthrough_behavior' => ?PassthroughBehavior,
    ?'payload_format_version' => ?StringWithLengthBetween1And64,
    ?'request_parameters' => ?IntegrationParameters,
    ?'request_templates' => ?TemplateMap,
    ?'template_selection_expression' => ?SelectionExpression,
    ?'timeout_in_millis' => ?IntegerWithLengthBetween50And30000,
    ?'tls_config' => ?TlsConfig,
  ) $s = shape()) {
    $this->api_gateway_managed = $s['api_gateway_managed'] ?? false;
    $this->connection_id = $s['connection_id'] ?? '';
    $this->connection_type = $s['connection_type'] ?? '';
    $this->content_handling_strategy = $s['content_handling_strategy'] ?? '';
    $this->credentials_arn = $s['credentials_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->integration_id = $s['integration_id'] ?? '';
    $this->integration_method = $s['integration_method'] ?? '';
    $this->integration_response_selection_expression = $s['integration_response_selection_expression'] ?? '';
    $this->integration_type = $s['integration_type'] ?? '';
    $this->integration_uri = $s['integration_uri'] ?? '';
    $this->passthrough_behavior = $s['passthrough_behavior'] ?? '';
    $this->payload_format_version = $s['payload_format_version'] ?? '';
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->request_templates = $s['request_templates'] ?? dict[];
    $this->template_selection_expression = $s['template_selection_expression'] ?? '';
    $this->timeout_in_millis = $s['timeout_in_millis'] ?? 0;
    $this->tls_config = $s['tls_config'] ?? null;
  }
}

class UpdateModelInput {
  public ?StringWithLengthBetween1And256 $content_type;
  public ?StringWithLengthBetween0And1024 $description;
  public ?StringWithLengthBetween1And128 $name;
  public ?StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
    ?'content_type' => ?StringWithLengthBetween1And256,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'schema' => ?StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->content_type = $s['content_type'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->schema = $s['schema'] ?? '';
  }
}

class UpdateModelRequest {
  public ?__string $api_id;
  public ?StringWithLengthBetween1And256 $content_type;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__string $model_id;
  public ?StringWithLengthBetween1And128 $name;
  public ?StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'content_type' => ?StringWithLengthBetween1And256,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'model_id' => ?__string,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'schema' => ?StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->content_type = $s['content_type'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->model_id = $s['model_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->schema = $s['schema'] ?? '';
  }
}

class UpdateModelResponse {
  public ?StringWithLengthBetween1And256 $content_type;
  public ?StringWithLengthBetween0And1024 $description;
  public ?Id $model_id;
  public ?StringWithLengthBetween1And128 $name;
  public ?StringWithLengthBetween0And32K $schema;

  public function __construct(shape(
    ?'content_type' => ?StringWithLengthBetween1And256,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'model_id' => ?Id,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'schema' => ?StringWithLengthBetween0And32K,
  ) $s = shape()) {
    $this->content_type = $s['content_type'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->model_id = $s['model_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->schema = $s['schema'] ?? '';
  }
}

class UpdateRouteInput {
  public ?__boolean $api_key_required;
  public ?AuthorizationScopes $authorization_scopes;
  public ?AuthorizationType $authorization_type;
  public ?Id $authorizer_id;
  public ?SelectionExpression $model_selection_expression;
  public ?StringWithLengthBetween1And64 $operation_name;
  public ?RouteModels $request_models;
  public ?RouteParameters $request_parameters;
  public ?SelectionKey $route_key;
  public ?SelectionExpression $route_response_selection_expression;
  public ?StringWithLengthBetween1And128 $target;

  public function __construct(shape(
    ?'api_key_required' => ?__boolean,
    ?'authorization_scopes' => ?AuthorizationScopes,
    ?'authorization_type' => ?AuthorizationType,
    ?'authorizer_id' => ?Id,
    ?'model_selection_expression' => ?SelectionExpression,
    ?'operation_name' => ?StringWithLengthBetween1And64,
    ?'request_models' => ?RouteModels,
    ?'request_parameters' => ?RouteParameters,
    ?'route_key' => ?SelectionKey,
    ?'route_response_selection_expression' => ?SelectionExpression,
    ?'target' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_key_required = $s['api_key_required'] ?? false;
    $this->authorization_scopes = $s['authorization_scopes'] ?? vec[];
    $this->authorization_type = $s['authorization_type'] ?? '';
    $this->authorizer_id = $s['authorizer_id'] ?? '';
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->operation_name = $s['operation_name'] ?? '';
    $this->request_models = $s['request_models'] ?? dict[];
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->route_key = $s['route_key'] ?? '';
    $this->route_response_selection_expression = $s['route_response_selection_expression'] ?? '';
    $this->target = $s['target'] ?? '';
  }
}

class UpdateRouteRequest {
  public ?__string $api_id;
  public ?__boolean $api_key_required;
  public ?AuthorizationScopes $authorization_scopes;
  public ?AuthorizationType $authorization_type;
  public ?Id $authorizer_id;
  public ?SelectionExpression $model_selection_expression;
  public ?StringWithLengthBetween1And64 $operation_name;
  public ?RouteModels $request_models;
  public ?RouteParameters $request_parameters;
  public ?__string $route_id;
  public ?SelectionKey $route_key;
  public ?SelectionExpression $route_response_selection_expression;
  public ?StringWithLengthBetween1And128 $target;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'api_key_required' => ?__boolean,
    ?'authorization_scopes' => ?AuthorizationScopes,
    ?'authorization_type' => ?AuthorizationType,
    ?'authorizer_id' => ?Id,
    ?'model_selection_expression' => ?SelectionExpression,
    ?'operation_name' => ?StringWithLengthBetween1And64,
    ?'request_models' => ?RouteModels,
    ?'request_parameters' => ?RouteParameters,
    ?'route_id' => ?__string,
    ?'route_key' => ?SelectionKey,
    ?'route_response_selection_expression' => ?SelectionExpression,
    ?'target' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->api_key_required = $s['api_key_required'] ?? false;
    $this->authorization_scopes = $s['authorization_scopes'] ?? vec[];
    $this->authorization_type = $s['authorization_type'] ?? '';
    $this->authorizer_id = $s['authorizer_id'] ?? '';
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->operation_name = $s['operation_name'] ?? '';
    $this->request_models = $s['request_models'] ?? dict[];
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->route_id = $s['route_id'] ?? '';
    $this->route_key = $s['route_key'] ?? '';
    $this->route_response_selection_expression = $s['route_response_selection_expression'] ?? '';
    $this->target = $s['target'] ?? '';
  }
}

class UpdateRouteResponseInput {
  public ?SelectionExpression $model_selection_expression;
  public ?RouteModels $response_models;
  public ?RouteParameters $response_parameters;
  public ?SelectionKey $route_response_key;

  public function __construct(shape(
    ?'model_selection_expression' => ?SelectionExpression,
    ?'response_models' => ?RouteModels,
    ?'response_parameters' => ?RouteParameters,
    ?'route_response_key' => ?SelectionKey,
  ) $s = shape()) {
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->response_models = $s['response_models'] ?? dict[];
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->route_response_key = $s['route_response_key'] ?? '';
  }
}

class UpdateRouteResponseRequest {
  public ?__string $api_id;
  public ?SelectionExpression $model_selection_expression;
  public ?RouteModels $response_models;
  public ?RouteParameters $response_parameters;
  public ?__string $route_id;
  public ?__string $route_response_id;
  public ?SelectionKey $route_response_key;

  public function __construct(shape(
    ?'api_id' => ?__string,
    ?'model_selection_expression' => ?SelectionExpression,
    ?'response_models' => ?RouteModels,
    ?'response_parameters' => ?RouteParameters,
    ?'route_id' => ?__string,
    ?'route_response_id' => ?__string,
    ?'route_response_key' => ?SelectionKey,
  ) $s = shape()) {
    $this->api_id = $s['api_id'] ?? '';
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->response_models = $s['response_models'] ?? dict[];
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->route_id = $s['route_id'] ?? '';
    $this->route_response_id = $s['route_response_id'] ?? '';
    $this->route_response_key = $s['route_response_key'] ?? '';
  }
}

class UpdateRouteResponseResponse {
  public ?SelectionExpression $model_selection_expression;
  public ?RouteModels $response_models;
  public ?RouteParameters $response_parameters;
  public ?Id $route_response_id;
  public ?SelectionKey $route_response_key;

  public function __construct(shape(
    ?'model_selection_expression' => ?SelectionExpression,
    ?'response_models' => ?RouteModels,
    ?'response_parameters' => ?RouteParameters,
    ?'route_response_id' => ?Id,
    ?'route_response_key' => ?SelectionKey,
  ) $s = shape()) {
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->response_models = $s['response_models'] ?? dict[];
    $this->response_parameters = $s['response_parameters'] ?? dict[];
    $this->route_response_id = $s['route_response_id'] ?? '';
    $this->route_response_key = $s['route_response_key'] ?? '';
  }
}

class UpdateRouteResult {
  public ?__boolean $api_gateway_managed;
  public ?__boolean $api_key_required;
  public ?AuthorizationScopes $authorization_scopes;
  public ?AuthorizationType $authorization_type;
  public ?Id $authorizer_id;
  public ?SelectionExpression $model_selection_expression;
  public ?StringWithLengthBetween1And64 $operation_name;
  public ?RouteModels $request_models;
  public ?RouteParameters $request_parameters;
  public ?Id $route_id;
  public ?SelectionKey $route_key;
  public ?SelectionExpression $route_response_selection_expression;
  public ?StringWithLengthBetween1And128 $target;

  public function __construct(shape(
    ?'api_gateway_managed' => ?__boolean,
    ?'api_key_required' => ?__boolean,
    ?'authorization_scopes' => ?AuthorizationScopes,
    ?'authorization_type' => ?AuthorizationType,
    ?'authorizer_id' => ?Id,
    ?'model_selection_expression' => ?SelectionExpression,
    ?'operation_name' => ?StringWithLengthBetween1And64,
    ?'request_models' => ?RouteModels,
    ?'request_parameters' => ?RouteParameters,
    ?'route_id' => ?Id,
    ?'route_key' => ?SelectionKey,
    ?'route_response_selection_expression' => ?SelectionExpression,
    ?'target' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->api_gateway_managed = $s['api_gateway_managed'] ?? false;
    $this->api_key_required = $s['api_key_required'] ?? false;
    $this->authorization_scopes = $s['authorization_scopes'] ?? vec[];
    $this->authorization_type = $s['authorization_type'] ?? '';
    $this->authorizer_id = $s['authorizer_id'] ?? '';
    $this->model_selection_expression = $s['model_selection_expression'] ?? '';
    $this->operation_name = $s['operation_name'] ?? '';
    $this->request_models = $s['request_models'] ?? dict[];
    $this->request_parameters = $s['request_parameters'] ?? dict[];
    $this->route_id = $s['route_id'] ?? '';
    $this->route_key = $s['route_key'] ?? '';
    $this->route_response_selection_expression = $s['route_response_selection_expression'] ?? '';
    $this->target = $s['target'] ?? '';
  }
}

class UpdateStageInput {
  public ?AccessLogSettings $access_log_settings;
  public ?__boolean $auto_deploy;
  public ?Id $client_certificate_id;
  public ?RouteSettings $default_route_settings;
  public ?Id $deployment_id;
  public ?StringWithLengthBetween0And1024 $description;
  public ?RouteSettingsMap $route_settings;
  public ?StageVariablesMap $stage_variables;

  public function __construct(shape(
    ?'access_log_settings' => ?AccessLogSettings,
    ?'auto_deploy' => ?__boolean,
    ?'client_certificate_id' => ?Id,
    ?'default_route_settings' => ?RouteSettings,
    ?'deployment_id' => ?Id,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'route_settings' => ?RouteSettingsMap,
    ?'stage_variables' => ?StageVariablesMap,
  ) $s = shape()) {
    $this->access_log_settings = $s['access_log_settings'] ?? null;
    $this->auto_deploy = $s['auto_deploy'] ?? false;
    $this->client_certificate_id = $s['client_certificate_id'] ?? '';
    $this->default_route_settings = $s['default_route_settings'] ?? null;
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->route_settings = $s['route_settings'] ?? dict[];
    $this->stage_variables = $s['stage_variables'] ?? dict[];
  }
}

class UpdateStageRequest {
  public ?AccessLogSettings $access_log_settings;
  public ?__string $api_id;
  public ?__boolean $auto_deploy;
  public ?Id $client_certificate_id;
  public ?RouteSettings $default_route_settings;
  public ?Id $deployment_id;
  public ?StringWithLengthBetween0And1024 $description;
  public ?RouteSettingsMap $route_settings;
  public ?__string $stage_name;
  public ?StageVariablesMap $stage_variables;

  public function __construct(shape(
    ?'access_log_settings' => ?AccessLogSettings,
    ?'api_id' => ?__string,
    ?'auto_deploy' => ?__boolean,
    ?'client_certificate_id' => ?Id,
    ?'default_route_settings' => ?RouteSettings,
    ?'deployment_id' => ?Id,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'route_settings' => ?RouteSettingsMap,
    ?'stage_name' => ?__string,
    ?'stage_variables' => ?StageVariablesMap,
  ) $s = shape()) {
    $this->access_log_settings = $s['access_log_settings'] ?? null;
    $this->api_id = $s['api_id'] ?? '';
    $this->auto_deploy = $s['auto_deploy'] ?? false;
    $this->client_certificate_id = $s['client_certificate_id'] ?? '';
    $this->default_route_settings = $s['default_route_settings'] ?? null;
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->route_settings = $s['route_settings'] ?? dict[];
    $this->stage_name = $s['stage_name'] ?? '';
    $this->stage_variables = $s['stage_variables'] ?? dict[];
  }
}

class UpdateStageResponse {
  public ?AccessLogSettings $access_log_settings;
  public ?__boolean $api_gateway_managed;
  public ?__boolean $auto_deploy;
  public ?Id $client_certificate_id;
  public ?__timestampIso8601 $created_date;
  public ?RouteSettings $default_route_settings;
  public ?Id $deployment_id;
  public ?StringWithLengthBetween0And1024 $description;
  public ?__string $last_deployment_status_message;
  public ?__timestampIso8601 $last_updated_date;
  public ?RouteSettingsMap $route_settings;
  public ?StringWithLengthBetween1And128 $stage_name;
  public ?StageVariablesMap $stage_variables;
  public ?Tags $tags;

  public function __construct(shape(
    ?'access_log_settings' => ?AccessLogSettings,
    ?'api_gateway_managed' => ?__boolean,
    ?'auto_deploy' => ?__boolean,
    ?'client_certificate_id' => ?Id,
    ?'created_date' => ?__timestampIso8601,
    ?'default_route_settings' => ?RouteSettings,
    ?'deployment_id' => ?Id,
    ?'description' => ?StringWithLengthBetween0And1024,
    ?'last_deployment_status_message' => ?__string,
    ?'last_updated_date' => ?__timestampIso8601,
    ?'route_settings' => ?RouteSettingsMap,
    ?'stage_name' => ?StringWithLengthBetween1And128,
    ?'stage_variables' => ?StageVariablesMap,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->access_log_settings = $s['access_log_settings'] ?? null;
    $this->api_gateway_managed = $s['api_gateway_managed'] ?? false;
    $this->auto_deploy = $s['auto_deploy'] ?? false;
    $this->client_certificate_id = $s['client_certificate_id'] ?? '';
    $this->created_date = $s['created_date'] ?? 0;
    $this->default_route_settings = $s['default_route_settings'] ?? null;
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->last_deployment_status_message = $s['last_deployment_status_message'] ?? '';
    $this->last_updated_date = $s['last_updated_date'] ?? 0;
    $this->route_settings = $s['route_settings'] ?? dict[];
    $this->stage_name = $s['stage_name'] ?? '';
    $this->stage_variables = $s['stage_variables'] ?? dict[];
    $this->tags = $s['tags'] ?? dict[];
  }
}

class UpdateVpcLinkInput {
  public ?StringWithLengthBetween1And128 $name;

  public function __construct(shape(
    ?'name' => ?StringWithLengthBetween1And128,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class UpdateVpcLinkRequest {
  public ?StringWithLengthBetween1And128 $name;
  public ?__string $vpc_link_id;

  public function __construct(shape(
    ?'name' => ?StringWithLengthBetween1And128,
    ?'vpc_link_id' => ?__string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->vpc_link_id = $s['vpc_link_id'] ?? '';
  }
}

class UpdateVpcLinkResponse {
  public ?__timestampIso8601 $created_date;
  public ?StringWithLengthBetween1And128 $name;
  public ?SecurityGroupIdList $security_group_ids;
  public ?SubnetIdList $subnet_ids;
  public ?Tags $tags;
  public ?Id $vpc_link_id;
  public ?VpcLinkStatus $vpc_link_status;
  public ?StringWithLengthBetween0And1024 $vpc_link_status_message;
  public ?VpcLinkVersion $vpc_link_version;

  public function __construct(shape(
    ?'created_date' => ?__timestampIso8601,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'security_group_ids' => ?SecurityGroupIdList,
    ?'subnet_ids' => ?SubnetIdList,
    ?'tags' => ?Tags,
    ?'vpc_link_id' => ?Id,
    ?'vpc_link_status' => ?VpcLinkStatus,
    ?'vpc_link_status_message' => ?StringWithLengthBetween0And1024,
    ?'vpc_link_version' => ?VpcLinkVersion,
  ) $s = shape()) {
    $this->created_date = $s['created_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->vpc_link_id = $s['vpc_link_id'] ?? '';
    $this->vpc_link_status = $s['vpc_link_status'] ?? '';
    $this->vpc_link_status_message = $s['vpc_link_status_message'] ?? '';
    $this->vpc_link_version = $s['vpc_link_version'] ?? '';
  }
}

type UriWithLengthBetween1And2048 = string;

class VpcLink {
  public ?__timestampIso8601 $created_date;
  public ?StringWithLengthBetween1And128 $name;
  public ?SecurityGroupIdList $security_group_ids;
  public ?SubnetIdList $subnet_ids;
  public ?Tags $tags;
  public ?Id $vpc_link_id;
  public ?VpcLinkStatus $vpc_link_status;
  public ?StringWithLengthBetween0And1024 $vpc_link_status_message;
  public ?VpcLinkVersion $vpc_link_version;

  public function __construct(shape(
    ?'created_date' => ?__timestampIso8601,
    ?'name' => ?StringWithLengthBetween1And128,
    ?'security_group_ids' => ?SecurityGroupIdList,
    ?'subnet_ids' => ?SubnetIdList,
    ?'tags' => ?Tags,
    ?'vpc_link_id' => ?Id,
    ?'vpc_link_status' => ?VpcLinkStatus,
    ?'vpc_link_status_message' => ?StringWithLengthBetween0And1024,
    ?'vpc_link_version' => ?VpcLinkVersion,
  ) $s = shape()) {
    $this->created_date = $s['created_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? dict[];
    $this->vpc_link_id = $s['vpc_link_id'] ?? '';
    $this->vpc_link_status = $s['vpc_link_status'] ?? '';
    $this->vpc_link_status_message = $s['vpc_link_status_message'] ?? '';
    $this->vpc_link_version = $s['vpc_link_version'] ?? '';
  }
}

type VpcLinkStatus = string;

type VpcLinkVersion = string;

class VpcLinks {
  public ?__listOfVpcLink $items;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'items' => ?__listOfVpcLink,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
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

