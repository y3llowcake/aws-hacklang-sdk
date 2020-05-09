<?hh // strict
namespace slack\aws\apigateway;

interface ApiGatewayV2 {
  public function CreateStage(CreateStageRequest) Awaitable<Errors\Result<CreateStageResponse>>;
  public function GetApi(GetApiRequest) Awaitable<Errors\Result<GetApiResponse>>;
  public function ReimportApi(ReimportApiRequest) Awaitable<Errors\Result<ReimportApiResponse>>;
  public function UpdateIntegrationResponse(UpdateIntegrationResponseRequest) Awaitable<Errors\Result<UpdateIntegrationResponseResponse>>;
  public function ExportApi(ExportApiRequest) Awaitable<Errors\Result<ExportApiResponse>>;
  public function GetDeployments(GetDeploymentsRequest) Awaitable<Errors\Result<GetDeploymentsResponse>>;
  public function GetIntegrations(GetIntegrationsRequest) Awaitable<Errors\Result<GetIntegrationsResponse>>;
  public function CreateDeployment(CreateDeploymentRequest) Awaitable<Errors\Result<CreateDeploymentResponse>>;
  public function DeleteRouteResponse(DeleteRouteResponseRequest) Awaitable<Errors\Error>;
  public function GetVpcLink(GetVpcLinkRequest) Awaitable<Errors\Result<GetVpcLinkResponse>>;
  public function UpdateModel(UpdateModelRequest) Awaitable<Errors\Result<UpdateModelResponse>>;
  public function DeleteDeployment(DeleteDeploymentRequest) Awaitable<Errors\Error>;
  public function DeleteDomainName(DeleteDomainNameRequest) Awaitable<Errors\Error>;
  public function DeleteRouteRequestParameter(DeleteRouteRequestParameterRequest) Awaitable<Errors\Error>;
  public function GetApiMapping(GetApiMappingRequest) Awaitable<Errors\Result<GetApiMappingResponse>>;
  public function DeleteAccessLogSettings(DeleteAccessLogSettingsRequest) Awaitable<Errors\Error>;
  public function DeleteIntegration(DeleteIntegrationRequest) Awaitable<Errors\Error>;
  public function GetDomainNames(GetDomainNamesRequest) Awaitable<Errors\Result<GetDomainNamesResponse>>;
  public function GetRouteResponse(GetRouteResponseRequest) Awaitable<Errors\Result<GetRouteResponseResponse>>;
  public function GetRoutes(GetRoutesRequest) Awaitable<Errors\Result<GetRoutesResponse>>;
  public function UpdateApi(UpdateApiRequest) Awaitable<Errors\Result<UpdateApiResponse>>;
  public function UpdateRoute(UpdateRouteRequest) Awaitable<Errors\Result<UpdateRouteResult>>;
  public function CreateModel(CreateModelRequest) Awaitable<Errors\Result<CreateModelResponse>>;
  public function CreateRouteResponse(CreateRouteResponseRequest) Awaitable<Errors\Result<CreateRouteResponseResponse>>;
  public function DeleteAuthorizer(DeleteAuthorizerRequest) Awaitable<Errors\Error>;
  public function GetApis(GetApisRequest) Awaitable<Errors\Result<GetApisResponse>>;
  public function GetIntegration(GetIntegrationRequest) Awaitable<Errors\Result<GetIntegrationResult>>;
  public function CreateApiMapping(CreateApiMappingRequest) Awaitable<Errors\Result<CreateApiMappingResponse>>;
  public function DeleteModel(DeleteModelRequest) Awaitable<Errors\Error>;
  public function CreateRoute(CreateRouteRequest) Awaitable<Errors\Result<CreateRouteResult>>;
  public function DeleteCorsConfiguration(DeleteCorsConfigurationRequest) Awaitable<Errors\Error>;
  public function DeleteStage(DeleteStageRequest) Awaitable<Errors\Error>;
  public function CreateVpcLink(CreateVpcLinkRequest) Awaitable<Errors\Result<CreateVpcLinkResponse>>;
  public function DeleteApi(DeleteApiRequest) Awaitable<Errors\Error>;
  public function UpdateRouteResponse(UpdateRouteResponseRequest) Awaitable<Errors\Result<UpdateRouteResponseResponse>>;
  public function DeleteVpcLink(DeleteVpcLinkRequest) Awaitable<Errors\Result<DeleteVpcLinkResponse>>;
  public function GetRoute(GetRouteRequest) Awaitable<Errors\Result<GetRouteResult>>;
  public function UpdateStage(UpdateStageRequest) Awaitable<Errors\Result<UpdateStageResponse>>;
  public function CreateAuthorizer(CreateAuthorizerRequest) Awaitable<Errors\Result<CreateAuthorizerResponse>>;
  public function CreateIntegration(CreateIntegrationRequest) Awaitable<Errors\Result<CreateIntegrationResult>>;
  public function GetDeployment(GetDeploymentRequest) Awaitable<Errors\Result<GetDeploymentResponse>>;
  public function GetTags(GetTagsRequest) Awaitable<Errors\Result<GetTagsResponse>>;
  public function ImportApi(ImportApiRequest) Awaitable<Errors\Result<ImportApiResponse>>;
  public function GetModel(GetModelRequest) Awaitable<Errors\Result<GetModelResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UpdateApiMapping(UpdateApiMappingRequest) Awaitable<Errors\Result<UpdateApiMappingResponse>>;
  public function CreateDomainName(CreateDomainNameRequest) Awaitable<Errors\Result<CreateDomainNameResponse>>;
  public function CreateIntegrationResponse(CreateIntegrationResponseRequest) Awaitable<Errors\Result<CreateIntegrationResponseResponse>>;
  public function DeleteRoute(DeleteRouteRequest) Awaitable<Errors\Error>;
  public function GetIntegrationResponse(GetIntegrationResponseRequest) Awaitable<Errors\Result<GetIntegrationResponseResponse>>;
  public function GetStage(GetStageRequest) Awaitable<Errors\Result<GetStageResponse>>;
  public function GetStages(GetStagesRequest) Awaitable<Errors\Result<GetStagesResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateDeployment(UpdateDeploymentRequest) Awaitable<Errors\Result<UpdateDeploymentResponse>>;
  public function CreateApi(CreateApiRequest) Awaitable<Errors\Result<CreateApiResponse>>;
  public function GetApiMappings(GetApiMappingsRequest) Awaitable<Errors\Result<GetApiMappingsResponse>>;
  public function GetAuthorizer(GetAuthorizerRequest) Awaitable<Errors\Result<GetAuthorizerResponse>>;
  public function GetModelTemplate(GetModelTemplateRequest) Awaitable<Errors\Result<GetModelTemplateResponse>>;
  public function GetModels(GetModelsRequest) Awaitable<Errors\Result<GetModelsResponse>>;
  public function UpdateIntegration(UpdateIntegrationRequest) Awaitable<Errors\Result<UpdateIntegrationResult>>;
  public function GetRouteResponses(GetRouteResponsesRequest) Awaitable<Errors\Result<GetRouteResponsesResponse>>;
  public function GetVpcLinks(GetVpcLinksRequest) Awaitable<Errors\Result<GetVpcLinksResponse>>;
  public function UpdateAuthorizer(UpdateAuthorizerRequest) Awaitable<Errors\Result<UpdateAuthorizerResponse>>;
  public function DeleteApiMapping(DeleteApiMappingRequest) Awaitable<Errors\Error>;
  public function DeleteIntegrationResponse(DeleteIntegrationResponseRequest) Awaitable<Errors\Error>;
  public function DeleteRouteSettings(DeleteRouteSettingsRequest) Awaitable<Errors\Error>;
  public function GetAuthorizers(GetAuthorizersRequest) Awaitable<Errors\Result<GetAuthorizersResponse>>;
  public function GetDomainName(GetDomainNameRequest) Awaitable<Errors\Result<GetDomainNameResponse>>;
  public function UpdateDomainName(UpdateDomainNameRequest) Awaitable<Errors\Result<UpdateDomainNameResponse>>;
  public function UpdateVpcLink(UpdateVpcLinkRequest) Awaitable<Errors\Result<UpdateVpcLinkResponse>>;
  public function GetIntegrationResponses(GetIntegrationResponsesRequest) Awaitable<Errors\Result<GetIntegrationResponsesResponse>>;
}

class DeleteAuthorizerRequest {
  public __string $api_id;
  public __string $authorizer_id;
}

class Deployment {
  public __boolean $auto_deployed;
  public __timestampIso8601 $created_date;
  public Id $deployment_id;
  public DeploymentStatus $deployment_status;
  public __string $deployment_status_message;
  public StringWithLengthBetween0And1024 $description;
}

class DomainNameConfiguration {
  public StringWithLengthBetween1And128 $certificate_name;
  public __string $api_gateway_domain_name;
  public Arn $certificate_arn;
  public __string $domain_name_status_message;
  public EndpointType $endpoint_type;
  public __string $hosted_zone_id;
  public SecurityPolicy $security_policy;
  public __timestampIso8601 $certificate_upload_date;
  public DomainNameStatus $domain_name_status;
}

class GetVpcLinksResponse {
  public __listOfVpcLink $items;
  public NextToken $next_token;
}

class ImportApiResponse {
  public __boolean $disable_schema_validation;
  public __listOf__string $import_info;
  public SelectionExpression $route_selection_expression;
  public __listOf__string $warnings;
  public Id $api_id;
  public SelectionExpression $api_key_selection_expression;
  public Cors $cors_configuration;
  public StringWithLengthBetween0And1024 $description;
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween1And128 $name;
  public ProtocolType $protocol_type;
  public StringWithLengthBetween1And64 $version;
  public __string $api_endpoint;
  public Tags $tags;
}

class IntegrationParameters {
}

class LimitExceededException {
  public __string $message;
  public __string $limit_type;
}

class NextToken {
}

class GetIntegrationsResponse {
  public __listOfIntegration $items;
  public NextToken $next_token;
}

class GetRouteResponsesRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;
  public __string $route_id;
}

class PassthroughBehavior {
}

class RouteParameters {
}

class ConnectionType {
}

class GetStagesResponse {
  public __listOfStage $items;
  public NextToken $next_token;
}

class UpdateStageInput {
  public Id $deployment_id;
  public StringWithLengthBetween0And1024 $description;
  public RouteSettingsMap $route_settings;
  public StageVariablesMap $stage_variables;
  public AccessLogSettings $access_log_settings;
  public __boolean $auto_deploy;
  public Id $client_certificate_id;
  public RouteSettings $default_route_settings;
}

class CreateIntegrationResponseInput {
  public ContentHandlingStrategy $content_handling_strategy;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;
}

class UpdateApiResponse {
  public __listOf__string $import_info;
  public SelectionExpression $route_selection_expression;
  public __string $api_endpoint;
  public StringWithLengthBetween1And64 $version;
  public Cors $cors_configuration;
  public __timestampIso8601 $created_date;
  public __boolean $disable_schema_validation;
  public Tags $tags;
  public Id $api_id;
  public SelectionExpression $api_key_selection_expression;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $name;
  public ProtocolType $protocol_type;
  public __listOf__string $warnings;
}

class UpdateIntegrationResult {
  public __boolean $api_gateway_managed;
  public UriWithLengthBetween1And2048 $integration_uri;
  public IntegrationParameters $request_parameters;
  public TemplateMap $request_templates;
  public StringWithLengthBetween1And1024 $connection_id;
  public StringWithLengthBetween1And64 $integration_method;
  public StringWithLengthBetween1And64 $payload_format_version;
  public SelectionExpression $template_selection_expression;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public ContentHandlingStrategy $content_handling_strategy;
  public Arn $credentials_arn;
  public StringWithLengthBetween0And1024 $description;
  public Id $integration_id;
  public ConnectionType $connection_type;
  public SelectionExpression $integration_response_selection_expression;
  public IntegrationType $integration_type;
  public PassthroughBehavior $passthrough_behavior;
  public TlsConfig $tls_config;
}

class DeleteAccessLogSettingsRequest {
  public __string $stage_name;
  public __string $api_id;
}

class GetApisResponse {
  public __listOfApi $items;
  public NextToken $next_token;
}

class IntegrationResponse {
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;
  public ContentHandlingStrategy $content_handling_strategy;
  public Id $integration_response_id;
  public SelectionKey $integration_response_key;
}

class DeleteModelRequest {
  public __string $api_id;
  public __string $model_id;
}

class GetModelTemplateRequest {
  public __string $api_id;
  public __string $model_id;
}

class IntegerWithLengthBetween50And30000 {
}

class RouteSettings {
  public LoggingLevel $logging_level;
  public __integer $throttling_burst_limit;
  public __double $throttling_rate_limit;
  public __boolean $data_trace_enabled;
  public __boolean $detailed_metrics_enabled;
}

class UpdateApiRequest {
  public Arn $credentials_arn;
  public StringWithLengthBetween1And128 $name;
  public SelectionExpression $api_key_selection_expression;
  public Cors $cors_configuration;
  public __boolean $disable_schema_validation;
  public SelectionKey $route_key;
  public SelectionExpression $route_selection_expression;
  public UriWithLengthBetween1And2048 $target;
  public StringWithLengthBetween1And64 $version;
  public __string $api_id;
  public StringWithLengthBetween0And1024 $description;
}

class UpdateDeploymentRequest {
  public __string $api_id;
  public __string $deployment_id;
  public StringWithLengthBetween0And1024 $description;
}

class CreateDomainNameRequest {
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
  public Tags $tags;
}

class RouteSettingsMap {
}

class GetRouteResponseResponse {
  public RouteParameters $response_parameters;
  public Id $route_response_id;
  public SelectionKey $route_response_key;
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
}

class LoggingLevel {
}

class UpdateApiMappingRequest {
  public StringWithLengthBetween1And128 $stage;
  public Id $api_id;
  public __string $api_mapping_id;
  public SelectionKey $api_mapping_key;
  public __string $domain_name;
}

class __listOfStage {
}

class UpdateDomainNameRequest {
  public DomainNameConfigurations $domain_name_configurations;
  public __string $domain_name;
}

class UpdateRouteInput {
  public Id $authorizer_id;
  public SelectionExpression $model_selection_expression;
  public SelectionExpression $route_response_selection_expression;
  public __boolean $api_key_required;
  public AuthorizationScopes $authorization_scopes;
  public AuthorizationType $authorization_type;
  public SelectionKey $route_key;
  public StringWithLengthBetween1And128 $target;
  public StringWithLengthBetween1And64 $operation_name;
  public RouteModels $request_models;
  public RouteParameters $request_parameters;
}

class __boolean {
}

class __listOfModel {
}

class __timestampUnix {
}

class ApiMappings {
  public __listOfApiMapping $items;
  public NextToken $next_token;
}

class StringWithLengthBetween1And512 {
}

class TagResourceResponse {
}

class CreateRouteResponseInput {
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public SelectionKey $route_response_key;
}

class ImportApiRequest {
  public __string $basepath;
  public __string $body;
  public __boolean $fail_on_warnings;
}

class IntegrationType {
}

class StringWithLengthBetween1And128 {
}

class UpdateApiMappingResponse {
  public Id $api_mapping_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;
  public Id $api_id;
}

class UpdateDomainNameResponse {
  public Tags $tags;
  public SelectionExpression $api_mapping_selection_expression;
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
}

class ContentHandlingStrategy {
}

class GetDeploymentsResponse {
  public __listOfDeployment $items;
  public NextToken $next_token;
}

class ReimportApiResponse {
  public __listOf__string $import_info;
  public SelectionExpression $route_selection_expression;
  public Id $api_id;
  public StringWithLengthBetween0And1024 $description;
  public ProtocolType $protocol_type;
  public __string $api_endpoint;
  public __boolean $disable_schema_validation;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween1And64 $version;
  public SelectionExpression $api_key_selection_expression;
  public Cors $cors_configuration;
  public __timestampIso8601 $created_date;
  public Tags $tags;
  public __listOf__string $warnings;
}

class UpdateStageRequest {
  public AccessLogSettings $access_log_settings;
  public __boolean $auto_deploy;
  public Id $deployment_id;
  public StringWithLengthBetween0And1024 $description;
  public __string $stage_name;
  public StageVariablesMap $stage_variables;
  public __string $api_id;
  public Id $client_certificate_id;
  public RouteSettings $default_route_settings;
  public RouteSettingsMap $route_settings;
}

class DeleteRouteRequest {
  public __string $api_id;
  public __string $route_id;
}

class GetDeploymentResponse {
  public __timestampIso8601 $created_date;
  public Id $deployment_id;
  public DeploymentStatus $deployment_status;
  public __string $deployment_status_message;
  public StringWithLengthBetween0And1024 $description;
  public __boolean $auto_deployed;
}

class GetDomainNameResponse {
  public Tags $tags;
  public SelectionExpression $api_mapping_selection_expression;
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
}

class ImportApiInput {
  public __string $body;
}

class DeleteDomainNameRequest {
  public __string $domain_name;
}

class GetIntegrationResponsesResponse {
  public __listOfIntegrationResponse $items;
  public NextToken $next_token;
}

class GetStageResponse {
  public Tags $tags;
  public StageVariablesMap $stage_variables;
  public Id $client_certificate_id;
  public __timestampIso8601 $created_date;
  public __string $last_deployment_status_message;
  public StringWithLengthBetween1And128 $stage_name;
  public AccessLogSettings $access_log_settings;
  public Id $deployment_id;
  public RouteSettingsMap $route_settings;
  public StringWithLengthBetween0And1024 $description;
  public __timestampIso8601 $last_updated_date;
  public __boolean $api_gateway_managed;
  public __boolean $auto_deploy;
  public RouteSettings $default_route_settings;
}

class __listOfVpcLink {
}

class AccessLogSettings {
  public Arn $destination_arn;
  public StringWithLengthBetween1And1024 $format;
}

class GetIntegrationsRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;
}

class TemplateMap {
}

class CreateIntegrationInput {
  public ContentHandlingStrategy $content_handling_strategy;
  public StringWithLengthBetween1And1024 $connection_id;
  public Arn $credentials_arn;
  public StringWithLengthBetween1And64 $integration_method;
  public IntegrationType $integration_type;
  public TemplateMap $request_templates;
  public SelectionExpression $template_selection_expression;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public TlsConfigInput $tls_config;
  public UriWithLengthBetween1And2048 $integration_uri;
  public PassthroughBehavior $passthrough_behavior;
  public StringWithLengthBetween1And64 $payload_format_version;
  public ConnectionType $connection_type;
  public StringWithLengthBetween0And1024 $description;
  public IntegrationParameters $request_parameters;
}

class DeleteApiMappingRequest {
  public __string $api_mapping_id;
  public __string $domain_name;
}

class UpdateAuthorizerRequest {
  public IdentitySourceList $identity_source;
  public JWTConfiguration $jwt_configuration;
  public StringWithLengthBetween1And128 $name;
  public Arn $authorizer_credentials_arn;
  public __string $authorizer_id;
  public AuthorizerType $authorizer_type;
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public StringWithLengthBetween0And1024 $identity_validation_expression;
  public __string $api_id;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
}

class VpcLink {
  public SubnetIdList $subnet_ids;
  public Tags $tags;
  public Id $vpc_link_id;
  public VpcLinkVersion $vpc_link_version;
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween1And128 $name;
  public SecurityGroupIdList $security_group_ids;
  public VpcLinkStatus $vpc_link_status;
  public StringWithLengthBetween0And1024 $vpc_link_status_message;
}

class Arn {
}

class CreateIntegrationResponseRequest {
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;
  public __string $api_id;
  public ContentHandlingStrategy $content_handling_strategy;
  public __string $integration_id;
  public SelectionKey $integration_response_key;
}

class GetAuthorizerResponse {
  public Id $authorizer_id;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public AuthorizerType $authorizer_type;
  public IdentitySourceList $identity_source;
  public Arn $authorizer_credentials_arn;
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public StringWithLengthBetween0And1024 $identity_validation_expression;
  public JWTConfiguration $jwt_configuration;
  public StringWithLengthBetween1And128 $name;
}

class GetModelsResponse {
  public __listOfModel $items;
  public NextToken $next_token;
}

class GetRouteRequest {
  public __string $api_id;
  public __string $route_id;
}

class GetRouteResult {
  public __boolean $api_gateway_managed;
  public AuthorizationScopes $authorization_scopes;
  public Id $authorizer_id;
  public RouteModels $request_models;
  public SelectionExpression $route_response_selection_expression;
  public StringWithLengthBetween1And128 $target;
  public __boolean $api_key_required;
  public AuthorizationType $authorization_type;
  public SelectionExpression $model_selection_expression;
  public StringWithLengthBetween1And64 $operation_name;
  public RouteParameters $request_parameters;
  public Id $route_id;
  public SelectionKey $route_key;
}

class TagResourceInput {
  public Tags $tags;
}

class TlsConfig {
  public StringWithLengthBetween1And512 $server_name_to_verify;
}

class UpdateModelInput {
  public StringWithLengthBetween0And32K $schema;
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $name;
}

class ConflictException {
  public __string $message;
}

class CreateIntegrationRequest {
  public StringWithLengthBetween1And1024 $connection_id;
  public IntegrationType $integration_type;
  public SelectionExpression $template_selection_expression;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public ContentHandlingStrategy $content_handling_strategy;
  public UriWithLengthBetween1And2048 $integration_uri;
  public StringWithLengthBetween1And64 $payload_format_version;
  public ConnectionType $connection_type;
  public StringWithLengthBetween0And1024 $description;
  public TlsConfigInput $tls_config;
  public PassthroughBehavior $passthrough_behavior;
  public IntegrationParameters $request_parameters;
  public TemplateMap $request_templates;
  public __string $api_id;
  public Arn $credentials_arn;
  public StringWithLengthBetween1And64 $integration_method;
}

class TlsConfigInput {
  public StringWithLengthBetween1And512 $server_name_to_verify;
}

class AccessDeniedException {
  public __string $message;
}

class Cors {
  public CorsOriginList $allow_origins;
  public CorsHeaderList $expose_headers;
  public IntegerWithLengthBetweenMinus1And86400 $max_age;
  public __boolean $allow_credentials;
  public CorsHeaderList $allow_headers;
  public CorsMethodList $allow_methods;
}

class CreateApiRequest {
  public StringWithLengthBetween1And64 $version;
  public ProtocolType $protocol_type;
  public SelectionExpression $route_selection_expression;
  public Tags $tags;
  public StringWithLengthBetween0And1024 $description;
  public __boolean $disable_schema_validation;
  public StringWithLengthBetween1And128 $name;
  public SelectionKey $route_key;
  public UriWithLengthBetween1And2048 $target;
  public SelectionExpression $api_key_selection_expression;
  public Cors $cors_configuration;
  public Arn $credentials_arn;
}

class DomainNameConfigurations {
}

class UpdateRouteRequest {
  public __string $route_id;
  public SelectionExpression $route_response_selection_expression;
  public StringWithLengthBetween1And128 $target;
  public StringWithLengthBetween1And64 $operation_name;
  public RouteModels $request_models;
  public RouteParameters $request_parameters;
  public AuthorizationType $authorization_type;
  public Id $authorizer_id;
  public SelectionExpression $model_selection_expression;
  public SelectionKey $route_key;
  public __string $api_id;
  public __boolean $api_key_required;
  public AuthorizationScopes $authorization_scopes;
}

class Authorizer {
  public JWTConfiguration $jwt_configuration;
  public StringWithLengthBetween1And128 $name;
  public Arn $authorizer_credentials_arn;
  public Id $authorizer_id;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public AuthorizerType $authorizer_type;
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public IdentitySourceList $identity_source;
  public StringWithLengthBetween0And1024 $identity_validation_expression;
}

class DeploymentStatus {
}

class GetApiMappingRequest {
  public __string $api_mapping_id;
  public __string $domain_name;
}

class GetModelResponse {
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public Id $model_id;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;
}

class GetStagesRequest {
  public __string $next_token;
  public __string $api_id;
  public __string $max_results;
}

class Route {
  public AuthorizationScopes $authorization_scopes;
  public SelectionExpression $model_selection_expression;
  public RouteModels $request_models;
  public RouteParameters $request_parameters;
  public Id $route_id;
  public SelectionExpression $route_response_selection_expression;
  public __boolean $api_gateway_managed;
  public __boolean $api_key_required;
  public StringWithLengthBetween1And128 $target;
  public StringWithLengthBetween1And64 $operation_name;
  public SelectionKey $route_key;
  public AuthorizationType $authorization_type;
  public Id $authorizer_id;
}

class GetRoutesResponse {
  public NextToken $next_token;
  public __listOfRoute $items;
}

class IdentitySourceList {
}

class CreateDeploymentInput {
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $stage_name;
}

class Deployments {
  public __listOfDeployment $items;
  public NextToken $next_token;
}

class GetVpcLinkResponse {
  public VpcLinkStatus $vpc_link_status;
  public VpcLinkVersion $vpc_link_version;
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween1And128 $name;
  public SecurityGroupIdList $security_group_ids;
  public Tags $tags;
  public Id $vpc_link_id;
  public SubnetIdList $subnet_ids;
  public StringWithLengthBetween0And1024 $vpc_link_status_message;
}

class Tags {
}

class UpdateRouteResponseRequest {
  public SelectionKey $route_response_key;
  public __string $api_id;
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public __string $route_id;
  public __string $route_response_id;
}

class UpdateStageResponse {
  public __string $last_deployment_status_message;
  public RouteSettingsMap $route_settings;
  public Tags $tags;
  public AccessLogSettings $access_log_settings;
  public __boolean $auto_deploy;
  public __timestampIso8601 $last_updated_date;
  public StringWithLengthBetween1And128 $stage_name;
  public __boolean $api_gateway_managed;
  public StageVariablesMap $stage_variables;
  public Id $client_certificate_id;
  public RouteSettings $default_route_settings;
  public Id $deployment_id;
  public StringWithLengthBetween0And1024 $description;
  public __timestampIso8601 $created_date;
}

class SelectionKey {
}

class UpdateModelResponse {
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public Id $model_id;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;
}

class VpcLinkVersion {
}

class __listOfApiMapping {
}

class ReimportApiRequest {
  public __string $api_id;
  public __string $basepath;
  public __string $body;
  public __boolean $fail_on_warnings;
}

class UpdateRouteResponseInput {
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public SelectionKey $route_response_key;
}

class CreateApiMappingRequest {
  public Id $api_id;
  public SelectionKey $api_mapping_key;
  public __string $domain_name;
  public StringWithLengthBetween1And128 $stage;
}

class GetModelRequest {
  public __string $model_id;
  public __string $api_id;
}

class UpdateIntegrationInput {
  public Arn $credentials_arn;
  public UriWithLengthBetween1And2048 $integration_uri;
  public PassthroughBehavior $passthrough_behavior;
  public SelectionExpression $template_selection_expression;
  public IntegrationType $integration_type;
  public StringWithLengthBetween1And64 $payload_format_version;
  public ContentHandlingStrategy $content_handling_strategy;
  public StringWithLengthBetween0And1024 $description;
  public IntegrationParameters $request_parameters;
  public TemplateMap $request_templates;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public StringWithLengthBetween1And1024 $connection_id;
  public ConnectionType $connection_type;
  public StringWithLengthBetween1And64 $integration_method;
  public TlsConfigInput $tls_config;
}

class EndpointType {
}

class GetApiResponse {
  public SelectionExpression $api_key_selection_expression;
  public __listOf__string $warnings;
  public Id $api_id;
  public Cors $cors_configuration;
  public StringWithLengthBetween0And1024 $description;
  public __listOf__string $import_info;
  public SelectionExpression $route_selection_expression;
  public Tags $tags;
  public __string $api_endpoint;
  public __timestampIso8601 $created_date;
  public __boolean $disable_schema_validation;
  public StringWithLengthBetween1And128 $name;
  public ProtocolType $protocol_type;
  public StringWithLengthBetween1And64 $version;
}

class GetTagsRequest {
  public __string $resource_arn;
}

class CreateApiInput {
  public Arn $credentials_arn;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $name;
  public Tags $tags;
  public StringWithLengthBetween1And64 $version;
  public SelectionExpression $api_key_selection_expression;
  public __boolean $disable_schema_validation;
  public ProtocolType $protocol_type;
  public SelectionKey $route_key;
  public SelectionExpression $route_selection_expression;
  public UriWithLengthBetween1And2048 $target;
  public Cors $cors_configuration;
}

class GetAuthorizersRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;
}

class StringWithLengthBetween1And256 {
}

class Template {
  public __string $value;
}

class __listOfDeployment {
}

class CreateModelRequest {
  public StringWithLengthBetween0And32K $schema;
  public __string $api_id;
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $name;
}

class DeleteApiRequest {
  public __string $api_id;
}

class ExportApiResponse {
  public ExportedApi $body;
}

class GetDeploymentRequest {
  public __string $api_id;
  public __string $deployment_id;
}

class GetIntegrationResponseRequest {
  public __string $integration_id;
  public __string $integration_response_id;
  public __string $api_id;
}

class GetRoutesRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;
}

class JWTConfiguration {
  public __listOf__string $audience;
  public UriWithLengthBetween1And2048 $issuer;
}

class UntagResourceRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;
}

class CreateApiMappingInput {
  public Id $api_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;
}

class CreateApiResponse {
  public Id $api_id;
  public Cors $cors_configuration;
  public __boolean $disable_schema_validation;
  public __listOf__string $import_info;
  public SelectionExpression $api_key_selection_expression;
  public StringWithLengthBetween0And1024 $description;
  public __listOf__string $warnings;
  public __string $api_endpoint;
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween1And128 $name;
  public ProtocolType $protocol_type;
  public SelectionExpression $route_selection_expression;
  public StringWithLengthBetween1And64 $version;
  public Tags $tags;
}

class AuthorizationScopes {
}

class AuthorizationType {
}

class DeleteStageRequest {
  public __string $api_id;
  public __string $stage_name;
}

class SecurityGroupIdList {
}

class UpdateVpcLinkRequest {
  public StringWithLengthBetween1And128 $name;
  public __string $vpc_link_id;
}

class CreateModelInput {
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
}

class CreateModelResponse {
  public StringWithLengthBetween0And1024 $description;
  public Id $model_id;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;
  public StringWithLengthBetween1And256 $content_type;
}

class GetDomainNameRequest {
  public __string $domain_name;
}

class Id {
}

class SubnetIdList {
}

class CreateRouteResponseResponse {
  public SelectionKey $route_response_key;
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public Id $route_response_id;
}

class CreateVpcLinkRequest {
  public StringWithLengthBetween1And128 $name;
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
  public Tags $tags;
}

class DeleteRouteRequestParameterRequest {
  public __string $request_parameter_key;
  public __string $route_id;
  public __string $api_id;
}

class GetIntegrationRequest {
  public __string $api_id;
  public __string $integration_id;
}

class TagResourceRequest {
  public __string $resource_arn;
  public Tags $tags;
}

class UpdateAuthorizerInput {
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public IdentitySourceList $identity_source;
  public StringWithLengthBetween0And1024 $identity_validation_expression;
  public JWTConfiguration $jwt_configuration;
  public StringWithLengthBetween1And128 $name;
  public Arn $authorizer_credentials_arn;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public AuthorizerType $authorizer_type;
}

class UpdateModelRequest {
  public StringWithLengthBetween0And1024 $description;
  public __string $model_id;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;
  public __string $api_id;
  public StringWithLengthBetween1And256 $content_type;
}

class DomainNameStatus {
}

class IntegerWithLengthBetweenMinus1And86400 {
}

class IntegrationResponses {
  public __listOfIntegrationResponse $items;
  public NextToken $next_token;
}

class Routes {
  public __listOfRoute $items;
  public NextToken $next_token;
}

class UpdateAuthorizerResponse {
  public Arn $authorizer_credentials_arn;
  public Id $authorizer_id;
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public IdentitySourceList $identity_source;
  public StringWithLengthBetween0And1024 $identity_validation_expression;
  public JWTConfiguration $jwt_configuration;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public AuthorizerType $authorizer_type;
  public StringWithLengthBetween1And128 $name;
}

class GetAuthorizerRequest {
  public __string $authorizer_id;
  public __string $api_id;
}

class Stages {
  public __listOfStage $items;
  public NextToken $next_token;
}

class DeleteCorsConfigurationRequest {
  public __string $api_id;
}

class GetRouteResponseRequest {
  public __string $api_id;
  public __string $route_id;
  public __string $route_response_id;
}

class GetRouteResponsesResponse {
  public __listOfRouteResponse $items;
  public NextToken $next_token;
}

class UpdateDomainNameInput {
  public DomainNameConfigurations $domain_name_configurations;
}

class UriWithLengthBetween1And2048 {
}

class CreateVpcLinkResponse {
  public VpcLinkStatus $vpc_link_status;
  public StringWithLengthBetween0And1024 $vpc_link_status_message;
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween1And128 $name;
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
  public Tags $tags;
  public Id $vpc_link_id;
  public VpcLinkVersion $vpc_link_version;
}

class __listOfDomainName {
}

class __listOfRoute {
}

class GetApiMappingsRequest {
  public __string $domain_name;
  public __string $max_results;
  public __string $next_token;
}

class DomainName {
  public SelectionExpression $api_mapping_selection_expression;
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
  public Tags $tags;
}

class GetDomainNamesRequest {
  public __string $max_results;
  public __string $next_token;
}

class ReimportApiInput {
  public __string $body;
}

class RouteResponses {
  public __listOfRouteResponse $items;
  public NextToken $next_token;
}

class Stage {
  public RouteSettingsMap $route_settings;
  public StringWithLengthBetween1And128 $stage_name;
  public Id $client_certificate_id;
  public __timestampIso8601 $created_date;
  public Tags $tags;
  public AccessLogSettings $access_log_settings;
  public __boolean $api_gateway_managed;
  public Id $deployment_id;
  public StringWithLengthBetween0And1024 $description;
  public __timestampIso8601 $last_updated_date;
  public __boolean $auto_deploy;
  public RouteSettings $default_route_settings;
  public __string $last_deployment_status_message;
  public StageVariablesMap $stage_variables;
}

class CreateVpcLinkInput {
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
  public Tags $tags;
  public StringWithLengthBetween1And128 $name;
}

class Integration {
  public ContentHandlingStrategy $content_handling_strategy;
  public Arn $credentials_arn;
  public Id $integration_id;
  public StringWithLengthBetween1And64 $payload_format_version;
  public TemplateMap $request_templates;
  public SelectionExpression $template_selection_expression;
  public StringWithLengthBetween1And1024 $connection_id;
  public ConnectionType $connection_type;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public TlsConfig $tls_config;
  public PassthroughBehavior $passthrough_behavior;
  public IntegrationParameters $request_parameters;
  public StringWithLengthBetween0And1024 $description;
  public UriWithLengthBetween1And2048 $integration_uri;
  public __boolean $api_gateway_managed;
  public IntegrationType $integration_type;
  public StringWithLengthBetween1And64 $integration_method;
  public SelectionExpression $integration_response_selection_expression;
}

class UpdateDeploymentInput {
  public StringWithLengthBetween0And1024 $description;
}

class UpdateRouteResult {
  public __boolean $api_key_required;
  public RouteModels $request_models;
  public RouteParameters $request_parameters;
  public Id $route_id;
  public SelectionKey $route_key;
  public SelectionExpression $route_response_selection_expression;
  public __boolean $api_gateway_managed;
  public AuthorizationScopes $authorization_scopes;
  public AuthorizationType $authorization_type;
  public Id $authorizer_id;
  public SelectionExpression $model_selection_expression;
  public StringWithLengthBetween1And64 $operation_name;
  public StringWithLengthBetween1And128 $target;
}

class Apis {
  public __listOfApi $items;
  public NextToken $next_token;
}

class RouteModels {
}

class UpdateIntegrationResponseRequest {
  public ContentHandlingStrategy $content_handling_strategy;
  public __string $integration_id;
  public __string $integration_response_id;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;
  public __string $api_id;
}

class DeleteRouteSettingsRequest {
  public __string $api_id;
  public __string $route_key;
  public __string $stage_name;
}

class DeleteVpcLinkResponse {
}

class ExportApiRequest {
  public __string $export_version;
  public __boolean $include_extensions;
  public __string $output_type;
  public __string $specification;
  public __string $stage_name;
  public __string $api_id;
}

class GetApisRequest {
  public __string $max_results;
  public __string $next_token;
}

class GetModelTemplateResponse {
  public __string $value;
}

class UpdateApiInput {
  public UriWithLengthBetween1And2048 $target;
  public StringWithLengthBetween0And1024 $description;
  public __boolean $disable_schema_validation;
  public StringWithLengthBetween1And128 $name;
  public SelectionKey $route_key;
  public SelectionExpression $route_selection_expression;
  public StringWithLengthBetween1And64 $version;
  public SelectionExpression $api_key_selection_expression;
  public Cors $cors_configuration;
  public Arn $credentials_arn;
}

class __listOfRouteResponse {
}

class GetAuthorizersResponse {
  public __listOfAuthorizer $items;
  public NextToken $next_token;
}

class UpdateRouteResponseResponse {
  public RouteParameters $response_parameters;
  public Id $route_response_id;
  public SelectionKey $route_response_key;
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
}

class VpcLinks {
  public __listOfVpcLink $items;
  public NextToken $next_token;
}

class CreateRouteInput {
  public __boolean $api_key_required;
  public AuthorizationType $authorization_type;
  public RouteModels $request_models;
  public SelectionKey $route_key;
  public StringWithLengthBetween1And128 $target;
  public AuthorizationScopes $authorization_scopes;
  public Id $authorizer_id;
  public SelectionExpression $model_selection_expression;
  public StringWithLengthBetween1And64 $operation_name;
  public RouteParameters $request_parameters;
  public SelectionExpression $route_response_selection_expression;
}

class GetApiRequest {
  public __string $api_id;
}

class __listOf__string {
}

class CreateStageInput {
  public AccessLogSettings $access_log_settings;
  public Id $client_certificate_id;
  public StringWithLengthBetween1And128 $stage_name;
  public Tags $tags;
  public StageVariablesMap $stage_variables;
  public __boolean $auto_deploy;
  public RouteSettings $default_route_settings;
  public Id $deployment_id;
  public StringWithLengthBetween0And1024 $description;
  public RouteSettingsMap $route_settings;
}

class UpdateIntegrationResponseResponse {
  public ContentHandlingStrategy $content_handling_strategy;
  public Id $integration_response_id;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;
}

class ProtocolType {
}

class UpdateVpcLinkInput {
  public StringWithLengthBetween1And128 $name;
}

class UpdateVpcLinkResponse {
  public StringWithLengthBetween1And128 $name;
  public Tags $tags;
  public VpcLinkStatus $vpc_link_status;
  public __timestampIso8601 $created_date;
  public SecurityGroupIdList $security_group_ids;
  public SubnetIdList $subnet_ids;
  public Id $vpc_link_id;
  public StringWithLengthBetween0And1024 $vpc_link_status_message;
  public VpcLinkVersion $vpc_link_version;
}

class DeleteVpcLinkRequest {
  public __string $vpc_link_id;
}

class Integrations {
  public __listOfIntegration $items;
  public NextToken $next_token;
}

class StringWithLengthBetween0And2048 {
}

class StringWithLengthBetween0And32K {
}

class VpcLinkStatus {
}

class __integer {
}

class CreateDeploymentRequest {
  public __string $api_id;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And128 $stage_name;
}

class GetIntegrationResult {
  public IntegrationParameters $request_parameters;
  public ConnectionType $connection_type;
  public SelectionExpression $integration_response_selection_expression;
  public UriWithLengthBetween1And2048 $integration_uri;
  public PassthroughBehavior $passthrough_behavior;
  public __boolean $api_gateway_managed;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public StringWithLengthBetween1And64 $payload_format_version;
  public TemplateMap $request_templates;
  public SelectionExpression $template_selection_expression;
  public TlsConfig $tls_config;
  public Arn $credentials_arn;
  public Id $integration_id;
  public StringWithLengthBetween1And64 $integration_method;
  public IntegrationType $integration_type;
  public StringWithLengthBetween1And1024 $connection_id;
  public ContentHandlingStrategy $content_handling_strategy;
  public StringWithLengthBetween0And1024 $description;
}

class __listOfAuthorizer {
}

class CreateRouteRequest {
  public Id $authorizer_id;
  public SelectionExpression $model_selection_expression;
  public StringWithLengthBetween1And64 $operation_name;
  public RouteParameters $request_parameters;
  public StringWithLengthBetween1And128 $target;
  public __string $api_id;
  public __boolean $api_key_required;
  public AuthorizationScopes $authorization_scopes;
  public AuthorizationType $authorization_type;
  public RouteModels $request_models;
  public SelectionKey $route_key;
  public SelectionExpression $route_response_selection_expression;
}

class DeleteIntegrationRequest {
  public __string $api_id;
  public __string $integration_id;
}

class SelectionExpression {
}

class __listOfApi {
}

class CorsMethodList {
}

class GetModelsRequest {
  public __string $next_token;
  public __string $api_id;
  public __string $max_results;
}

class GetVpcLinksRequest {
  public __string $max_results;
  public __string $next_token;
}

class Model {
  public StringWithLengthBetween1And256 $content_type;
  public StringWithLengthBetween0And1024 $description;
  public Id $model_id;
  public StringWithLengthBetween1And128 $name;
  public StringWithLengthBetween0And32K $schema;
}

class CreateDomainNameInput {
  public Tags $tags;
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
}

class GetDomainNamesResponse {
  public __listOfDomainName $items;
  public NextToken $next_token;
}

class StageVariablesMap {
}

class ApiMapping {
  public Id $api_id;
  public Id $api_mapping_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;
}

class CreateAuthorizerInput {
  public JWTConfiguration $jwt_configuration;
  public StringWithLengthBetween1And128 $name;
  public Arn $authorizer_credentials_arn;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public AuthorizerType $authorizer_type;
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public IdentitySourceList $identity_source;
  public StringWithLengthBetween0And1024 $identity_validation_expression;
}

class CreateStageResponse {
  public AccessLogSettings $access_log_settings;
  public __boolean $auto_deploy;
  public Id $client_certificate_id;
  public __timestampIso8601 $created_date;
  public StringWithLengthBetween0And1024 $description;
  public __timestampIso8601 $last_updated_date;
  public __string $last_deployment_status_message;
  public __boolean $api_gateway_managed;
  public RouteSettings $default_route_settings;
  public RouteSettingsMap $route_settings;
  public Tags $tags;
  public Id $deployment_id;
  public StringWithLengthBetween1And128 $stage_name;
  public StageVariablesMap $stage_variables;
}

class DeleteRouteResponseRequest {
  public __string $api_id;
  public __string $route_id;
  public __string $route_response_id;
}

class StringWithLengthBetween1And1024 {
}

class CorsHeaderList {
}

class CreateDomainNameResponse {
  public SelectionExpression $api_mapping_selection_expression;
  public StringWithLengthBetween1And512 $domain_name;
  public DomainNameConfigurations $domain_name_configurations;
  public Tags $tags;
}

class DomainNames {
  public __listOfDomainName $items;
  public NextToken $next_token;
}

class GetDeploymentsRequest {
  public __string $api_id;
  public __string $max_results;
  public __string $next_token;
}

class GetStageRequest {
  public __string $stage_name;
  public __string $api_id;
}

class UpdateDeploymentResponse {
  public Id $deployment_id;
  public DeploymentStatus $deployment_status;
  public __string $deployment_status_message;
  public StringWithLengthBetween0And1024 $description;
  public __boolean $auto_deployed;
  public __timestampIso8601 $created_date;
}

class __double {
}

class __listOfIntegration {
}

class GetVpcLinkRequest {
  public __string $vpc_link_id;
}

class IntegerWithLengthBetween0And3600 {
}

class NotFoundException {
  public __string $message;
  public __string $resource_type;
}

class GetTagsResponse {
  public Tags $tags;
}

class StringWithLengthBetween1And1600 {
}

class Api {
  public Cors $cors_configuration;
  public __boolean $disable_schema_validation;
  public __string $api_endpoint;
  public __timestampIso8601 $created_date;
  public __listOf__string $import_info;
  public ProtocolType $protocol_type;
  public Tags $tags;
  public Id $api_id;
  public SelectionExpression $api_key_selection_expression;
  public StringWithLengthBetween1And128 $name;
  public SelectionExpression $route_selection_expression;
  public StringWithLengthBetween1And64 $version;
  public __listOf__string $warnings;
  public StringWithLengthBetween0And1024 $description;
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

class CreateDeploymentResponse {
  public __boolean $auto_deployed;
  public __timestampIso8601 $created_date;
  public Id $deployment_id;
  public DeploymentStatus $deployment_status;
  public __string $deployment_status_message;
  public StringWithLengthBetween0And1024 $description;
}

class CreateIntegrationResponseResponse {
  public Id $integration_response_id;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;
  public ContentHandlingStrategy $content_handling_strategy;
}

class DeleteIntegrationResponseRequest {
  public __string $api_id;
  public __string $integration_id;
  public __string $integration_response_id;
}

class GetApiMappingResponse {
  public Id $api_id;
  public Id $api_mapping_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;
}

class Models {
  public __listOfModel $items;
  public NextToken $next_token;
}

class StringWithLengthBetween0And1024 {
}

class UpdateApiMappingInput {
  public Id $api_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;
}

class __string {
}

class CreateApiMappingResponse {
  public Id $api_mapping_id;
  public SelectionKey $api_mapping_key;
  public StringWithLengthBetween1And128 $stage;
  public Id $api_id;
}

class RouteResponse {
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public Id $route_response_id;
  public SelectionKey $route_response_key;
}

class CreateAuthorizerRequest {
  public StringWithLengthBetween0And1024 $identity_validation_expression;
  public __string $api_id;
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public IdentitySourceList $identity_source;
  public JWTConfiguration $jwt_configuration;
  public StringWithLengthBetween1And128 $name;
  public Arn $authorizer_credentials_arn;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public AuthorizerType $authorizer_type;
}

class ParameterConstraints {
  public __boolean $required;
}

class StringWithLengthBetween1And64 {
}

class UpdateIntegrationResponseInput {
  public ContentHandlingStrategy $content_handling_strategy;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;
}

class CreateAuthorizerResponse {
  public IdentitySourceList $identity_source;
  public JWTConfiguration $jwt_configuration;
  public StringWithLengthBetween1And128 $name;
  public Arn $authorizer_credentials_arn;
  public Id $authorizer_id;
  public IntegerWithLengthBetween0And3600 $authorizer_result_ttl_in_seconds;
  public AuthorizerType $authorizer_type;
  public UriWithLengthBetween1And2048 $authorizer_uri;
  public StringWithLengthBetween0And1024 $identity_validation_expression;
}

class __timestampIso8601 {
}

class DeleteDeploymentRequest {
  public __string $api_id;
  public __string $deployment_id;
}

class GetApiMappingsResponse {
  public __listOfApiMapping $items;
  public NextToken $next_token;
}

class GetIntegrationResponseResponse {
  public Id $integration_response_id;
  public SelectionKey $integration_response_key;
  public IntegrationParameters $response_parameters;
  public TemplateMap $response_templates;
  public SelectionExpression $template_selection_expression;
  public ContentHandlingStrategy $content_handling_strategy;
}

class UpdateIntegrationRequest {
  public Arn $credentials_arn;
  public PassthroughBehavior $passthrough_behavior;
  public ConnectionType $connection_type;
  public StringWithLengthBetween1And64 $integration_method;
  public UriWithLengthBetween1And2048 $integration_uri;
  public TlsConfigInput $tls_config;
  public StringWithLengthBetween1And1024 $connection_id;
  public StringWithLengthBetween1And64 $payload_format_version;
  public SelectionExpression $template_selection_expression;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public __string $api_id;
  public ContentHandlingStrategy $content_handling_strategy;
  public StringWithLengthBetween0And1024 $description;
  public __string $integration_id;
  public IntegrationType $integration_type;
  public IntegrationParameters $request_parameters;
  public TemplateMap $request_templates;
}

class __long {
}

class CreateRouteResult {
  public __boolean $api_gateway_managed;
  public SelectionExpression $model_selection_expression;
  public RouteParameters $request_parameters;
  public Id $route_id;
  public StringWithLengthBetween1And128 $target;
  public SelectionKey $route_key;
  public SelectionExpression $route_response_selection_expression;
  public __boolean $api_key_required;
  public AuthorizationScopes $authorization_scopes;
  public AuthorizationType $authorization_type;
  public Id $authorizer_id;
  public StringWithLengthBetween1And64 $operation_name;
  public RouteModels $request_models;
}

class GetIntegrationResponsesRequest {
  public __string $api_id;
  public __string $integration_id;
  public __string $max_results;
  public __string $next_token;
}

class SecurityPolicy {
}

class __listOfIntegrationResponse {
}

class CorsOriginList {
}

class CreateIntegrationResult {
  public Arn $credentials_arn;
  public StringWithLengthBetween0And1024 $description;
  public StringWithLengthBetween1And64 $integration_method;
  public UriWithLengthBetween1And2048 $integration_uri;
  public SelectionExpression $template_selection_expression;
  public __boolean $api_gateway_managed;
  public ConnectionType $connection_type;
  public Id $integration_id;
  public IntegrationType $integration_type;
  public PassthroughBehavior $passthrough_behavior;
  public StringWithLengthBetween1And64 $payload_format_version;
  public IntegrationParameters $request_parameters;
  public IntegerWithLengthBetween50And30000 $timeout_in_millis;
  public StringWithLengthBetween1And1024 $connection_id;
  public ContentHandlingStrategy $content_handling_strategy;
  public TlsConfig $tls_config;
  public SelectionExpression $integration_response_selection_expression;
  public TemplateMap $request_templates;
}

class CreateRouteResponseRequest {
  public SelectionKey $route_response_key;
  public __string $api_id;
  public SelectionExpression $model_selection_expression;
  public RouteModels $response_models;
  public RouteParameters $response_parameters;
  public __string $route_id;
}

class CreateStageRequest {
  public RouteSettingsMap $route_settings;
  public StringWithLengthBetween1And128 $stage_name;
  public StageVariablesMap $stage_variables;
  public AccessLogSettings $access_log_settings;
  public __string $api_id;
  public __boolean $auto_deploy;
  public Id $client_certificate_id;
  public RouteSettings $default_route_settings;
  public Id $deployment_id;
  public StringWithLengthBetween0And1024 $description;
  public Tags $tags;
}

class ExportedApi {
}

class TooManyRequestsException {
  public __string $limit_type;
  public __string $message;
}

