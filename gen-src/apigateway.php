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
}

class AccessLogSettings {
  public Arn $destination_arn;
  public StringWithLengthBetween1And1024 $format;
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
}

class ApiMapping {
  public Id $api_id;
  public Id $api_mapping_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;
}

class ApiMappings {
  public __listOfApiMapping $items;
  public NextToken $next_token;
}

class Apis {
  public __listOfApi $items;
  public NextToken $next_token;
}

class Arn {
}

class AuthorizationScopes {
}

class AuthorizationType {
}

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
}

class AuthorizerType {
}

class Authorizers {
  public __listOfAuthorizer $items;
  public NextToken $next_token;
}

class BadRequestException {
  public __string $message;
}

class ConflictException {
  public __string $message;
}

class ConnectionType {
}

class ContentHandlingStrategy {
}

class Cors {
  public __boolean $allow_credentials;
  public CorsHeaderList $allow_headers;
  public CorsMethodList $allow_methods;
  public CorsOriginList $allow_origins;
  public CorsHeaderList $expose_headers;
  public IntegerWithLengthBetweenMinus1And86400 $max_age;
}

class CorsHeaderList {
}

class CorsMethodList {
}

class CorsOriginList {
}

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
}

class CreateApiMappingInput {
  public Id $api_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;
}

class CreateApiMappingRequest {
  public Id $api_id;
  public SelectionKey $api_mapping_key;
  public __string $domain_name;
  public StringWithLengthBetween1And128 $stage;
}

class CreateApiMappingResponse {
  public Id $api_id;
  public Id $api_mapping_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;
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
}

class CreateDeploymentInput {
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $stage_name;
}

class CreateDeploymentRequest {
  public __string $api_id;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $stage_name;
}

class CreateDeploymentResponse {
  public __boolean $auto_deployed;
  public __timestampIso8601 $created_date;
  public Id $deployment_id;
  public DeploymentStatus $deployment_status;
  public __string $deployment_status_message;
  public StringWithLengthBetween0And1024 $description;
}

class CreateDomainNameInput {
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
  public Tags $tags;
}

class CreateDomainNameRequest {
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
  public Tags $tags;
}

class CreateDomainNameResponse {
  public SelectionExpression $api_mapping_selection_expression;
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
  public Tags $tags;
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
}

class CreateIntegrationResponseInput {
  public ContentHandlingStrategy $content_handling_strategy;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;
}

class CreateIntegrationResponseRequest {
  public __string $api_id;
  public ContentHandlingStrategy $content_handling_strategy;
  public __string $integration_id;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;
}

class CreateIntegrationResponseResponse {
  public ContentHandlingStrategy $content_handling_strategy;
  public Id $integration_response_id;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;
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
}

class CreateModelInput {
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;
}

class CreateModelRequest {
  public __string $api_id;
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;
}

class CreateModelResponse {
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public Id $model_id;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;
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
}

class CreateRouteResponseInput {
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public SelectionKey $route_response_key;
}

class CreateRouteResponseRequest {
  public __string $api_id;
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public __string $route_id;
  public SelectionKey $route_response_key;
}

class CreateRouteResponseResponse {
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public Id $route_response_id;
  public SelectionKey $route_response_key;
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
}

class CreateVpcLinkInput {
  public StringWithLengthBetween1And128 $name;
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
  public Tags $tags;
}

class CreateVpcLinkRequest {
  public StringWithLengthBetween1And128 $name;
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
  public Tags $tags;
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
}

class DeleteAccessLogSettingsRequest {
  public __string $api_id;
  public __string $stage_name;
}

class DeleteApiMappingRequest {
  public __string $api_mapping_id;
  public __string $domain_name;
}

class DeleteApiRequest {
  public __string $api_id;
}

class DeleteAuthorizerRequest {
  public __string $api_id;
  public __string $authorizer_id;
}

class DeleteCorsConfigurationRequest {
  public __string $api_id;
}

class DeleteDeploymentRequest {
  public __string $api_id;
  public __string $deployment_id;
}

class DeleteDomainNameRequest {
  public __string $domain_name;
}

class DeleteIntegrationRequest {
  public __string $api_id;
  public __string $integration_id;
}

class DeleteIntegrationResponseRequest {
  public __string $api_id;
  public __string $integration_id;
  public __string $integration_response_id;
}

class DeleteModelRequest {
  public __string $api_id;
  public __string $model_id;
}

class DeleteRouteRequest {
  public __string $api_id;
  public __string $route_id;
}

class DeleteRouteRequestParameterRequest {
  public __string $api_id;
  public __string $request_parameter_key;
  public __string $route_id;
}

class DeleteRouteResponseRequest {
  public __string $api_id;
  public __string $route_id;
  public __string $route_response_id;
}

class DeleteRouteSettingsRequest {
  public __string $api_id;
  public __string $route_key;
  public __string $stage_name;
}

class DeleteStageRequest {
  public __string $api_id;
  public __string $stage_name;
}

class DeleteVpcLinkRequest {
  public __string $vpc_link_id;
}

class DeleteVpcLinkResponse {
}

class Deployment {
  public __boolean $auto_deployed;
  public __timestampIso8601 $created_date;
  public Id $deployment_id;
  public DeploymentStatus $deployment_status;
  public __string $deployment_status_message;
  public StringWithLengthBetween0And1024 $description;
}

class DeploymentStatus {
}

class Deployments {
  public __listOfDeployment $items;
  public NextToken $next_token;
}

class DomainName {
  public SelectionExpression $api_mapping_selection_expression;
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
  public Tags $tags;
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
}

class DomainNameConfigurations {
}

class DomainNameStatus {
}

class DomainNames {
  public __listOfDomainName $items;
  public NextToken $next_token;
}

class EndpointType {
}

class ExportApiRequest {
  public __string $api_id;
  public __string $export_version;
  public __boolean $include_extensions;
  public __string $output_type;
  public __string $specification;
  public __string $stage_name;
}

class ExportApiResponse {
  public ExportedApi $body;
}

class ExportedApi {
}

class GetApiMappingRequest {
  public __string $api_mapping_id;
  public __string $domain_name;
}

class GetApiMappingResponse {
  public Id $api_id;
  public Id $api_mapping_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;
}

class GetApiMappingsRequest {
  public __string $domain_name;
  public __string $max_results;
  public __string $next_token;
}

class GetApiMappingsResponse {
  public __listOfApiMapping $items;
  public NextToken $next_token;
}

class GetApiRequest {
  public __string $api_id;
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
}

class GetApisRequest {
  public __string $max_results;
  public __string $next_token;
}

class GetApisResponse {
  public __listOfApi $items;
  public NextToken $next_token;
}

class GetAuthorizerRequest {
  public __string $api_id;
  public __string $authorizer_id;
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
}

class GetAuthorizersRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;
}

class GetAuthorizersResponse {
  public __listOfAuthorizer $items;
  public NextToken $next_token;
}

class GetDeploymentRequest {
  public __string $api_id;
  public __string $deployment_id;
}

class GetDeploymentResponse {
  public __boolean $auto_deployed;
  public __timestampIso8601 $created_date;
  public Id $deployment_id;
  public DeploymentStatus $deployment_status;
  public __string $deployment_status_message;
  public StringWithLengthBetween0And1024 $description;
}

class GetDeploymentsRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;
}

class GetDeploymentsResponse {
  public __listOfDeployment $items;
  public NextToken $next_token;
}

class GetDomainNameRequest {
  public __string $domain_name;
}

class GetDomainNameResponse {
  public SelectionExpression $api_mapping_selection_expression;
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
  public Tags $tags;
}

class GetDomainNamesRequest {
  public __string $max_results;
  public __string $next_token;
}

class GetDomainNamesResponse {
  public __listOfDomainName $items;
  public NextToken $next_token;
}

class GetIntegrationRequest {
  public __string $api_id;
  public __string $integration_id;
}

class GetIntegrationResponseRequest {
  public __string $api_id;
  public __string $integration_id;
  public __string $integration_response_id;
}

class GetIntegrationResponseResponse {
  public ContentHandlingStrategy $content_handling_strategy;
  public Id $integration_response_id;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;
}

class GetIntegrationResponsesRequest {
  public __string $api_id;
  public __string $integration_id;
  public __string $max_results;
  public __string $next_token;
}

class GetIntegrationResponsesResponse {
  public __listOfIntegrationResponse $items;
  public NextToken $next_token;
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
}

class GetIntegrationsRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;
}

class GetIntegrationsResponse {
  public __listOfIntegration $items;
  public NextToken $next_token;
}

class GetModelRequest {
  public __string $api_id;
  public __string $model_id;
}

class GetModelResponse {
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public Id $model_id;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;
}

class GetModelTemplateRequest {
  public __string $api_id;
  public __string $model_id;
}

class GetModelTemplateResponse {
  public __string $value;
}

class GetModelsRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;
}

class GetModelsResponse {
  public __listOfModel $items;
  public NextToken $next_token;
}

class GetRouteRequest {
  public __string $api_id;
  public __string $route_id;
}

class GetRouteResponseRequest {
  public __string $api_id;
  public __string $route_id;
  public __string $route_response_id;
}

class GetRouteResponseResponse {
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public Id $route_response_id;
  public SelectionKey $route_response_key;
}

class GetRouteResponsesRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;
  public __string $route_id;
}

class GetRouteResponsesResponse {
  public __listOfRouteResponse $items;
  public NextToken $next_token;
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
}

class GetRoutesRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;
}

class GetRoutesResponse {
  public __listOfRoute $items;
  public NextToken $next_token;
}

class GetStageRequest {
  public __string $api_id;
  public __string $stage_name;
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
}

class GetStagesRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;
}

class GetStagesResponse {
  public __listOfStage $items;
  public NextToken $next_token;
}

class GetTagsRequest {
  public __string $resource_arn;
}

class GetTagsResponse {
  public Tags $tags;
}

class GetVpcLinkRequest {
  public __string $vpc_link_id;
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
}

class GetVpcLinksRequest {
  public __string $max_results;
  public __string $next_token;
}

class GetVpcLinksResponse {
  public __listOfVpcLink $items;
  public NextToken $next_token;
}

class Id {
}

class IdentitySourceList {
}

class ImportApiInput {
  public __string $body;
}

class ImportApiRequest {
  public __string $basepath;
  public __string $body;
  public __boolean $fail_on_warnings;
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
}

class IntegerWithLengthBetween0And3600 {
}

class IntegerWithLengthBetween50And30000 {
}

class IntegerWithLengthBetweenMinus1And86400 {
}

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
}

class IntegrationParameters {
}

class IntegrationResponse {
  public ContentHandlingStrategy $content_handling_strategy;
  public Id $integration_response_id;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;
}

class IntegrationResponses {
  public __listOfIntegrationResponse $items;
  public NextToken $next_token;
}

class IntegrationType {
}

class Integrations {
  public __listOfIntegration $items;
  public NextToken $next_token;
}

class JWTConfiguration {
  public __listOf__string $audience;
  public UriWithLengthBetween1And2048 $issuer;
}

class LimitExceededException {
  public __string $limit_type;
  public __string $message;
}

class LoggingLevel {
}

class Model {
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public Id $model_id;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;
}

class Models {
  public __listOfModel $items;
  public NextToken $next_token;
}

class NextToken {
}

class NotFoundException {
  public __string $message;
  public __string $resource_type;
}

class ParameterConstraints {
  public __boolean $required;
}

class PassthroughBehavior {
}

class ProtocolType {
}

class ReimportApiInput {
  public __string $body;
}

class ReimportApiRequest {
  public __string $api_id;
  public __string $basepath;
  public __string $body;
  public __boolean $fail_on_warnings;
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
}

class RouteModels {
}

class RouteParameters {
}

class RouteResponse {
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public Id $route_response_id;
  public SelectionKey $route_response_key;
}

class RouteResponses {
  public __listOfRouteResponse $items;
  public NextToken $next_token;
}

class RouteSettings {
  public __boolean $data_trace_enabled;
  public __boolean $detailed_metrics_enabled;
  public LoggingLevel $logging_level;
  public __integer $throttling_burst_limit;
  public __double $throttling_rate_limit;
}

class RouteSettingsMap {
}

class Routes {
  public __listOfRoute $items;
  public NextToken $next_token;
}

class SecurityGroupIdList {
}

class SecurityPolicy {
}

class SelectionExpression {
}

class SelectionKey {
}

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
}

class StageVariablesMap {
}

class Stages {
  public __listOfStage $items;
  public NextToken $next_token;
}

class StringWithLengthBetween0And1024 {
}

class StringWithLengthBetween0And2048 {
}

class StringWithLengthBetween0And32K {
}

class StringWithLengthBetween1And1024 {
}

class StringWithLengthBetween1And128 {
}

class StringWithLengthBetween1And1600 {
}

class StringWithLengthBetween1And256 {
}

class StringWithLengthBetween1And512 {
}

class StringWithLengthBetween1And64 {
}

class SubnetIdList {
}

class TagResourceInput {
  public Tags $tags;
}

class TagResourceRequest {
  public __string $resource_arn;
  public Tags $tags;
}

class TagResourceResponse {
}

class Tags {
}

class Template {
  public __string $value;
}

class TemplateMap {
}

class TlsConfig {
  public StringWithLengthBetween1And512 $server_name_to_verify;
}

class TlsConfigInput {
  public StringWithLengthBetween1And512 $server_name_to_verify;
}

class TooManyRequestsException {
  public __string $limit_type;
  public __string $message;
}

class UntagResourceRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;
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
}

class UpdateApiMappingInput {
  public Id $api_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;
}

class UpdateApiMappingRequest {
  public Id $api_id;
  public __string $api_mapping_id;
  public SelectionKey $api_mapping_key;
  public __string $domain_name;
  public StringWithLengthBetween1And128 $stage;
}

class UpdateApiMappingResponse {
  public Id $api_id;
  public Id $api_mapping_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;
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
}

class UpdateDeploymentInput {
  public StringWithLengthBetween0And1024 $description;
}

class UpdateDeploymentRequest {
  public __string $api_id;
  public __string $deployment_id;
  public StringWithLengthBetween0And1024 $description;
}

class UpdateDeploymentResponse {
  public __boolean $auto_deployed;
  public __timestampIso8601 $created_date;
  public Id $deployment_id;
  public DeploymentStatus $deployment_status;
  public __string $deployment_status_message;
  public StringWithLengthBetween0And1024 $description;
}

class UpdateDomainNameInput {
  public DomainNameConfigurations $domain_name_configurations;
}

class UpdateDomainNameRequest {
  public __string $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
}

class UpdateDomainNameResponse {
  public SelectionExpression $api_mapping_selection_expression;
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
  public Tags $tags;
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
}

class UpdateIntegrationResponseInput {
  public ContentHandlingStrategy $content_handling_strategy;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;
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
}

class UpdateIntegrationResponseResponse {
  public ContentHandlingStrategy $content_handling_strategy;
  public Id $integration_response_id;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;
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
}

class UpdateModelInput {
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;
}

class UpdateModelRequest {
  public __string $api_id;
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public __string $model_id;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;
}

class UpdateModelResponse {
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public Id $model_id;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;
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
}

class UpdateRouteResponseInput {
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public SelectionKey $route_response_key;
}

class UpdateRouteResponseRequest {
  public __string $api_id;
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public __string $route_id;
  public __string $route_response_id;
  public SelectionKey $route_response_key;
}

class UpdateRouteResponseResponse {
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public Id $route_response_id;
  public SelectionKey $route_response_key;
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
}

class UpdateVpcLinkInput {
  public StringWithLengthBetween1And128 $name;
}

class UpdateVpcLinkRequest {
  public StringWithLengthBetween1And128 $name;
  public __string $vpc_link_id;
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
}

class UriWithLengthBetween1And2048 {
}

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
}

class VpcLinkStatus {
}

class VpcLinkVersion {
}

class VpcLinks {
  public __listOfVpcLink $items;
  public NextToken $next_token;
}

class __boolean {
}

class __double {
}

class __integer {
}

class __listOfApi {
}

class __listOfApiMapping {
}

class __listOfAuthorizer {
}

class __listOfDeployment {
}

class __listOfDomainName {
}

class __listOfIntegration {
}

class __listOfIntegrationResponse {
}

class __listOfModel {
}

class __listOfRoute {
}

class __listOfRouteResponse {
}

class __listOfStage {
}

class __listOfVpcLink {
}

class __listOf__string {
}

class __long {
}

class __string {
}

class __timestampIso8601 {
}

class __timestampUnix {
}

