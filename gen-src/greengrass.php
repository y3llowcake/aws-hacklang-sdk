<?hh // strict
namespace slack\aws\greengrass;

interface Greengrass {
  public function AssociateRoleToGroup(AssociateRoleToGroupRequest): Awaitable<Errors\Result<AssociateRoleToGroupResponse>>;
  public function AssociateServiceRoleToAccount(AssociateServiceRoleToAccountRequest): Awaitable<Errors\Result<AssociateServiceRoleToAccountResponse>>;
  public function CreateConnectorDefinition(CreateConnectorDefinitionRequest): Awaitable<Errors\Result<CreateConnectorDefinitionResponse>>;
  public function CreateConnectorDefinitionVersion(CreateConnectorDefinitionVersionRequest): Awaitable<Errors\Result<CreateConnectorDefinitionVersionResponse>>;
  public function CreateCoreDefinition(CreateCoreDefinitionRequest): Awaitable<Errors\Result<CreateCoreDefinitionResponse>>;
  public function CreateCoreDefinitionVersion(CreateCoreDefinitionVersionRequest): Awaitable<Errors\Result<CreateCoreDefinitionVersionResponse>>;
  public function CreateDeployment(CreateDeploymentRequest): Awaitable<Errors\Result<CreateDeploymentResponse>>;
  public function CreateDeviceDefinition(CreateDeviceDefinitionRequest): Awaitable<Errors\Result<CreateDeviceDefinitionResponse>>;
  public function CreateDeviceDefinitionVersion(CreateDeviceDefinitionVersionRequest): Awaitable<Errors\Result<CreateDeviceDefinitionVersionResponse>>;
  public function CreateFunctionDefinition(CreateFunctionDefinitionRequest): Awaitable<Errors\Result<CreateFunctionDefinitionResponse>>;
  public function CreateFunctionDefinitionVersion(CreateFunctionDefinitionVersionRequest): Awaitable<Errors\Result<CreateFunctionDefinitionVersionResponse>>;
  public function CreateGroup(CreateGroupRequest): Awaitable<Errors\Result<CreateGroupResponse>>;
  public function CreateGroupCertificateAuthority(CreateGroupCertificateAuthorityRequest): Awaitable<Errors\Result<CreateGroupCertificateAuthorityResponse>>;
  public function CreateGroupVersion(CreateGroupVersionRequest): Awaitable<Errors\Result<CreateGroupVersionResponse>>;
  public function CreateLoggerDefinition(CreateLoggerDefinitionRequest): Awaitable<Errors\Result<CreateLoggerDefinitionResponse>>;
  public function CreateLoggerDefinitionVersion(CreateLoggerDefinitionVersionRequest): Awaitable<Errors\Result<CreateLoggerDefinitionVersionResponse>>;
  public function CreateResourceDefinition(CreateResourceDefinitionRequest): Awaitable<Errors\Result<CreateResourceDefinitionResponse>>;
  public function CreateResourceDefinitionVersion(CreateResourceDefinitionVersionRequest): Awaitable<Errors\Result<CreateResourceDefinitionVersionResponse>>;
  public function CreateSoftwareUpdateJob(CreateSoftwareUpdateJobRequest): Awaitable<Errors\Result<CreateSoftwareUpdateJobResponse>>;
  public function CreateSubscriptionDefinition(CreateSubscriptionDefinitionRequest): Awaitable<Errors\Result<CreateSubscriptionDefinitionResponse>>;
  public function CreateSubscriptionDefinitionVersion(CreateSubscriptionDefinitionVersionRequest): Awaitable<Errors\Result<CreateSubscriptionDefinitionVersionResponse>>;
  public function DeleteConnectorDefinition(DeleteConnectorDefinitionRequest): Awaitable<Errors\Result<DeleteConnectorDefinitionResponse>>;
  public function DeleteCoreDefinition(DeleteCoreDefinitionRequest): Awaitable<Errors\Result<DeleteCoreDefinitionResponse>>;
  public function DeleteDeviceDefinition(DeleteDeviceDefinitionRequest): Awaitable<Errors\Result<DeleteDeviceDefinitionResponse>>;
  public function DeleteFunctionDefinition(DeleteFunctionDefinitionRequest): Awaitable<Errors\Result<DeleteFunctionDefinitionResponse>>;
  public function DeleteGroup(DeleteGroupRequest): Awaitable<Errors\Result<DeleteGroupResponse>>;
  public function DeleteLoggerDefinition(DeleteLoggerDefinitionRequest): Awaitable<Errors\Result<DeleteLoggerDefinitionResponse>>;
  public function DeleteResourceDefinition(DeleteResourceDefinitionRequest): Awaitable<Errors\Result<DeleteResourceDefinitionResponse>>;
  public function DeleteSubscriptionDefinition(DeleteSubscriptionDefinitionRequest): Awaitable<Errors\Result<DeleteSubscriptionDefinitionResponse>>;
  public function DisassociateRoleFromGroup(DisassociateRoleFromGroupRequest): Awaitable<Errors\Result<DisassociateRoleFromGroupResponse>>;
  public function DisassociateServiceRoleFromAccount(DisassociateServiceRoleFromAccountRequest): Awaitable<Errors\Result<DisassociateServiceRoleFromAccountResponse>>;
  public function GetAssociatedRole(GetAssociatedRoleRequest): Awaitable<Errors\Result<GetAssociatedRoleResponse>>;
  public function GetBulkDeploymentStatus(GetBulkDeploymentStatusRequest): Awaitable<Errors\Result<GetBulkDeploymentStatusResponse>>;
  public function GetConnectivityInfo(GetConnectivityInfoRequest): Awaitable<Errors\Result<GetConnectivityInfoResponse>>;
  public function GetConnectorDefinition(GetConnectorDefinitionRequest): Awaitable<Errors\Result<GetConnectorDefinitionResponse>>;
  public function GetConnectorDefinitionVersion(GetConnectorDefinitionVersionRequest): Awaitable<Errors\Result<GetConnectorDefinitionVersionResponse>>;
  public function GetCoreDefinition(GetCoreDefinitionRequest): Awaitable<Errors\Result<GetCoreDefinitionResponse>>;
  public function GetCoreDefinitionVersion(GetCoreDefinitionVersionRequest): Awaitable<Errors\Result<GetCoreDefinitionVersionResponse>>;
  public function GetDeploymentStatus(GetDeploymentStatusRequest): Awaitable<Errors\Result<GetDeploymentStatusResponse>>;
  public function GetDeviceDefinition(GetDeviceDefinitionRequest): Awaitable<Errors\Result<GetDeviceDefinitionResponse>>;
  public function GetDeviceDefinitionVersion(GetDeviceDefinitionVersionRequest): Awaitable<Errors\Result<GetDeviceDefinitionVersionResponse>>;
  public function GetFunctionDefinition(GetFunctionDefinitionRequest): Awaitable<Errors\Result<GetFunctionDefinitionResponse>>;
  public function GetFunctionDefinitionVersion(GetFunctionDefinitionVersionRequest): Awaitable<Errors\Result<GetFunctionDefinitionVersionResponse>>;
  public function GetGroup(GetGroupRequest): Awaitable<Errors\Result<GetGroupResponse>>;
  public function GetGroupCertificateAuthority(GetGroupCertificateAuthorityRequest): Awaitable<Errors\Result<GetGroupCertificateAuthorityResponse>>;
  public function GetGroupCertificateConfiguration(GetGroupCertificateConfigurationRequest): Awaitable<Errors\Result<GetGroupCertificateConfigurationResponse>>;
  public function GetGroupVersion(GetGroupVersionRequest): Awaitable<Errors\Result<GetGroupVersionResponse>>;
  public function GetLoggerDefinition(GetLoggerDefinitionRequest): Awaitable<Errors\Result<GetLoggerDefinitionResponse>>;
  public function GetLoggerDefinitionVersion(GetLoggerDefinitionVersionRequest): Awaitable<Errors\Result<GetLoggerDefinitionVersionResponse>>;
  public function GetResourceDefinition(GetResourceDefinitionRequest): Awaitable<Errors\Result<GetResourceDefinitionResponse>>;
  public function GetResourceDefinitionVersion(GetResourceDefinitionVersionRequest): Awaitable<Errors\Result<GetResourceDefinitionVersionResponse>>;
  public function GetServiceRoleForAccount(GetServiceRoleForAccountRequest): Awaitable<Errors\Result<GetServiceRoleForAccountResponse>>;
  public function GetSubscriptionDefinition(GetSubscriptionDefinitionRequest): Awaitable<Errors\Result<GetSubscriptionDefinitionResponse>>;
  public function GetSubscriptionDefinitionVersion(GetSubscriptionDefinitionVersionRequest): Awaitable<Errors\Result<GetSubscriptionDefinitionVersionResponse>>;
  public function ListBulkDeploymentDetailedReports(ListBulkDeploymentDetailedReportsRequest): Awaitable<Errors\Result<ListBulkDeploymentDetailedReportsResponse>>;
  public function ListBulkDeployments(ListBulkDeploymentsRequest): Awaitable<Errors\Result<ListBulkDeploymentsResponse>>;
  public function ListConnectorDefinitionVersions(ListConnectorDefinitionVersionsRequest): Awaitable<Errors\Result<ListConnectorDefinitionVersionsResponse>>;
  public function ListConnectorDefinitions(ListConnectorDefinitionsRequest): Awaitable<Errors\Result<ListConnectorDefinitionsResponse>>;
  public function ListCoreDefinitionVersions(ListCoreDefinitionVersionsRequest): Awaitable<Errors\Result<ListCoreDefinitionVersionsResponse>>;
  public function ListCoreDefinitions(ListCoreDefinitionsRequest): Awaitable<Errors\Result<ListCoreDefinitionsResponse>>;
  public function ListDeployments(ListDeploymentsRequest): Awaitable<Errors\Result<ListDeploymentsResponse>>;
  public function ListDeviceDefinitionVersions(ListDeviceDefinitionVersionsRequest): Awaitable<Errors\Result<ListDeviceDefinitionVersionsResponse>>;
  public function ListDeviceDefinitions(ListDeviceDefinitionsRequest): Awaitable<Errors\Result<ListDeviceDefinitionsResponse>>;
  public function ListFunctionDefinitionVersions(ListFunctionDefinitionVersionsRequest): Awaitable<Errors\Result<ListFunctionDefinitionVersionsResponse>>;
  public function ListFunctionDefinitions(ListFunctionDefinitionsRequest): Awaitable<Errors\Result<ListFunctionDefinitionsResponse>>;
  public function ListGroupCertificateAuthorities(ListGroupCertificateAuthoritiesRequest): Awaitable<Errors\Result<ListGroupCertificateAuthoritiesResponse>>;
  public function ListGroupVersions(ListGroupVersionsRequest): Awaitable<Errors\Result<ListGroupVersionsResponse>>;
  public function ListGroups(ListGroupsRequest): Awaitable<Errors\Result<ListGroupsResponse>>;
  public function ListLoggerDefinitionVersions(ListLoggerDefinitionVersionsRequest): Awaitable<Errors\Result<ListLoggerDefinitionVersionsResponse>>;
  public function ListLoggerDefinitions(ListLoggerDefinitionsRequest): Awaitable<Errors\Result<ListLoggerDefinitionsResponse>>;
  public function ListResourceDefinitionVersions(ListResourceDefinitionVersionsRequest): Awaitable<Errors\Result<ListResourceDefinitionVersionsResponse>>;
  public function ListResourceDefinitions(ListResourceDefinitionsRequest): Awaitable<Errors\Result<ListResourceDefinitionsResponse>>;
  public function ListSubscriptionDefinitionVersions(ListSubscriptionDefinitionVersionsRequest): Awaitable<Errors\Result<ListSubscriptionDefinitionVersionsResponse>>;
  public function ListSubscriptionDefinitions(ListSubscriptionDefinitionsRequest): Awaitable<Errors\Result<ListSubscriptionDefinitionsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ResetDeployments(ResetDeploymentsRequest): Awaitable<Errors\Result<ResetDeploymentsResponse>>;
  public function StartBulkDeployment(StartBulkDeploymentRequest): Awaitable<Errors\Result<StartBulkDeploymentResponse>>;
  public function StopBulkDeployment(StopBulkDeploymentRequest): Awaitable<Errors\Result<StopBulkDeploymentResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateConnectivityInfo(UpdateConnectivityInfoRequest): Awaitable<Errors\Result<UpdateConnectivityInfoResponse>>;
  public function UpdateConnectorDefinition(UpdateConnectorDefinitionRequest): Awaitable<Errors\Result<UpdateConnectorDefinitionResponse>>;
  public function UpdateCoreDefinition(UpdateCoreDefinitionRequest): Awaitable<Errors\Result<UpdateCoreDefinitionResponse>>;
  public function UpdateDeviceDefinition(UpdateDeviceDefinitionRequest): Awaitable<Errors\Result<UpdateDeviceDefinitionResponse>>;
  public function UpdateFunctionDefinition(UpdateFunctionDefinitionRequest): Awaitable<Errors\Result<UpdateFunctionDefinitionResponse>>;
  public function UpdateGroup(UpdateGroupRequest): Awaitable<Errors\Result<UpdateGroupResponse>>;
  public function UpdateGroupCertificateConfiguration(UpdateGroupCertificateConfigurationRequest): Awaitable<Errors\Result<UpdateGroupCertificateConfigurationResponse>>;
  public function UpdateLoggerDefinition(UpdateLoggerDefinitionRequest): Awaitable<Errors\Result<UpdateLoggerDefinitionResponse>>;
  public function UpdateResourceDefinition(UpdateResourceDefinitionRequest): Awaitable<Errors\Result<UpdateResourceDefinitionResponse>>;
  public function UpdateSubscriptionDefinition(UpdateSubscriptionDefinitionRequest): Awaitable<Errors\Result<UpdateSubscriptionDefinitionResponse>>;
}

class AssociateRoleToGroupRequest {
  public __string $group_id;
  public __string $role_arn;
}

class AssociateRoleToGroupResponse {
  public __string $associated_at;
}

class AssociateServiceRoleToAccountRequest {
  public __string $role_arn;
}

class AssociateServiceRoleToAccountResponse {
  public __string $associated_at;
}

class BadRequestException {
  public ErrorDetails $error_details;
  public __string $message;
}

class BulkDeployment {
  public __string $bulk_deployment_arn;
  public __string $bulk_deployment_id;
  public __string $created_at;
}

class BulkDeploymentMetrics {
  public __integer $invalid_input_records;
  public __integer $records_processed;
  public __integer $retry_attempts;
}

class BulkDeploymentResult {
  public __string $created_at;
  public __string $deployment_arn;
  public __string $deployment_id;
  public __string $deployment_status;
  public DeploymentType $deployment_type;
  public ErrorDetails $error_details;
  public __string $error_message;
  public __string $group_arn;
}

class BulkDeploymentResults {
}

class BulkDeploymentStatus {
}

class BulkDeployments {
}

class ConnectivityInfo {
  public __string $host_address;
  public __string $id;
  public __string $metadata;
  public __integer $port_number;
}

class Connector {
  public __string $connector_arn;
  public __string $id;
  public __mapOf__string $parameters;
}

class ConnectorDefinitionVersion {
  public __listOfConnector $connectors;
}

class Core {
  public __string $certificate_arn;
  public __string $id;
  public __boolean $sync_shadow;
  public __string $thing_arn;
}

class CoreDefinitionVersion {
  public __listOfCore $cores;
}

class CreateConnectorDefinitionRequest {
  public __string $amzn_client_token;
  public ConnectorDefinitionVersion $initial_version;
  public __string $name;
  public Tags $tags;
}

class CreateConnectorDefinitionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
}

class CreateConnectorDefinitionVersionRequest {
  public __string $amzn_client_token;
  public __string $connector_definition_id;
  public __listOfConnector $connectors;
}

class CreateConnectorDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $version;
}

class CreateCoreDefinitionRequest {
  public __string $amzn_client_token;
  public CoreDefinitionVersion $initial_version;
  public __string $name;
  public Tags $tags;
}

class CreateCoreDefinitionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
}

class CreateCoreDefinitionVersionRequest {
  public __string $amzn_client_token;
  public __string $core_definition_id;
  public __listOfCore $cores;
}

class CreateCoreDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $version;
}

class CreateDeploymentRequest {
  public __string $amzn_client_token;
  public __string $deployment_id;
  public DeploymentType $deployment_type;
  public __string $group_id;
  public __string $group_version_id;
}

class CreateDeploymentResponse {
  public __string $deployment_arn;
  public __string $deployment_id;
}

class CreateDeviceDefinitionRequest {
  public __string $amzn_client_token;
  public DeviceDefinitionVersion $initial_version;
  public __string $name;
  public Tags $tags;
}

class CreateDeviceDefinitionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
}

class CreateDeviceDefinitionVersionRequest {
  public __string $amzn_client_token;
  public __string $device_definition_id;
  public __listOfDevice $devices;
}

class CreateDeviceDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $version;
}

class CreateFunctionDefinitionRequest {
  public __string $amzn_client_token;
  public FunctionDefinitionVersion $initial_version;
  public __string $name;
  public Tags $tags;
}

class CreateFunctionDefinitionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
}

class CreateFunctionDefinitionVersionRequest {
  public __string $amzn_client_token;
  public FunctionDefaultConfig $default_config;
  public __string $function_definition_id;
  public __listOfFunction $functions;
}

class CreateFunctionDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $version;
}

class CreateGroupCertificateAuthorityRequest {
  public __string $amzn_client_token;
  public __string $group_id;
}

class CreateGroupCertificateAuthorityResponse {
  public __string $group_certificate_authority_arn;
}

class CreateGroupRequest {
  public __string $amzn_client_token;
  public GroupVersion $initial_version;
  public __string $name;
  public Tags $tags;
}

class CreateGroupResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
}

class CreateGroupVersionRequest {
  public __string $amzn_client_token;
  public __string $connector_definition_version_arn;
  public __string $core_definition_version_arn;
  public __string $device_definition_version_arn;
  public __string $function_definition_version_arn;
  public __string $group_id;
  public __string $logger_definition_version_arn;
  public __string $resource_definition_version_arn;
  public __string $subscription_definition_version_arn;
}

class CreateGroupVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $version;
}

class CreateLoggerDefinitionRequest {
  public __string $amzn_client_token;
  public LoggerDefinitionVersion $initial_version;
  public __string $name;
  public Tags $tags;
}

class CreateLoggerDefinitionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
}

class CreateLoggerDefinitionVersionRequest {
  public __string $amzn_client_token;
  public __string $logger_definition_id;
  public __listOfLogger $loggers;
}

class CreateLoggerDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $version;
}

class CreateResourceDefinitionRequest {
  public __string $amzn_client_token;
  public ResourceDefinitionVersion $initial_version;
  public __string $name;
  public Tags $tags;
}

class CreateResourceDefinitionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
}

class CreateResourceDefinitionVersionRequest {
  public __string $amzn_client_token;
  public __string $resource_definition_id;
  public __listOfResource $resources;
}

class CreateResourceDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $version;
}

class CreateSoftwareUpdateJobRequest {
  public __string $amzn_client_token;
  public S3UrlSignerRole $s_3_url_signer_role;
  public SoftwareToUpdate $software_to_update;
  public UpdateAgentLogLevel $update_agent_log_level;
  public UpdateTargets $update_targets;
  public UpdateTargetsArchitecture $update_targets_architecture;
  public UpdateTargetsOperatingSystem $update_targets_operating_system;
}

class CreateSoftwareUpdateJobResponse {
  public __string $iot_job_arn;
  public __string $iot_job_id;
  public __string $platform_software_version;
}

class CreateSubscriptionDefinitionRequest {
  public __string $amzn_client_token;
  public SubscriptionDefinitionVersion $initial_version;
  public __string $name;
  public Tags $tags;
}

class CreateSubscriptionDefinitionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
}

class CreateSubscriptionDefinitionVersionRequest {
  public __string $amzn_client_token;
  public __string $subscription_definition_id;
  public __listOfSubscription $subscriptions;
}

class CreateSubscriptionDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $version;
}

class DefinitionInformation {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
}

class DeleteConnectorDefinitionRequest {
  public __string $connector_definition_id;
}

class DeleteConnectorDefinitionResponse {
}

class DeleteCoreDefinitionRequest {
  public __string $core_definition_id;
}

class DeleteCoreDefinitionResponse {
}

class DeleteDeviceDefinitionRequest {
  public __string $device_definition_id;
}

class DeleteDeviceDefinitionResponse {
}

class DeleteFunctionDefinitionRequest {
  public __string $function_definition_id;
}

class DeleteFunctionDefinitionResponse {
}

class DeleteGroupRequest {
  public __string $group_id;
}

class DeleteGroupResponse {
}

class DeleteLoggerDefinitionRequest {
  public __string $logger_definition_id;
}

class DeleteLoggerDefinitionResponse {
}

class DeleteResourceDefinitionRequest {
  public __string $resource_definition_id;
}

class DeleteResourceDefinitionResponse {
}

class DeleteSubscriptionDefinitionRequest {
  public __string $subscription_definition_id;
}

class DeleteSubscriptionDefinitionResponse {
}

class Deployment {
  public __string $created_at;
  public __string $deployment_arn;
  public __string $deployment_id;
  public DeploymentType $deployment_type;
  public __string $group_arn;
}

class DeploymentType {
}

class Deployments {
}

class Device {
  public __string $certificate_arn;
  public __string $id;
  public __boolean $sync_shadow;
  public __string $thing_arn;
}

class DeviceDefinitionVersion {
  public __listOfDevice $devices;
}

class DisassociateRoleFromGroupRequest {
  public __string $group_id;
}

class DisassociateRoleFromGroupResponse {
  public __string $disassociated_at;
}

class DisassociateServiceRoleFromAccountRequest {
}

class DisassociateServiceRoleFromAccountResponse {
  public __string $disassociated_at;
}

class Empty {
}

class EncodingType {
}

class ErrorDetail {
  public __string $detailed_error_code;
  public __string $detailed_error_message;
}

class ErrorDetails {
}

class Function {
  public __string $function_arn;
  public FunctionConfiguration $function_configuration;
  public __string $id;
}

class FunctionConfiguration {
  public EncodingType $encoding_type;
  public FunctionConfigurationEnvironment $environment;
  public __string $exec_args;
  public __string $executable;
  public __integer $memory_size;
  public __boolean $pinned;
  public __integer $timeout;
}

class FunctionConfigurationEnvironment {
  public __boolean $access_sysfs;
  public FunctionExecutionConfig $execution;
  public __listOfResourceAccessPolicy $resource_access_policies;
  public __mapOf__string $variables;
}

class FunctionDefaultConfig {
  public FunctionDefaultExecutionConfig $execution;
}

class FunctionDefaultExecutionConfig {
  public FunctionIsolationMode $isolation_mode;
  public FunctionRunAsConfig $run_as;
}

class FunctionDefinitionVersion {
  public FunctionDefaultConfig $default_config;
  public __listOfFunction $functions;
}

class FunctionExecutionConfig {
  public FunctionIsolationMode $isolation_mode;
  public FunctionRunAsConfig $run_as;
}

class FunctionIsolationMode {
}

class FunctionRunAsConfig {
  public __integer $gid;
  public __integer $uid;
}

class GeneralError {
  public ErrorDetails $error_details;
  public __string $message;
}

class GetAssociatedRoleRequest {
  public __string $group_id;
}

class GetAssociatedRoleResponse {
  public __string $associated_at;
  public __string $role_arn;
}

class GetBulkDeploymentStatusRequest {
  public __string $bulk_deployment_id;
}

class GetBulkDeploymentStatusResponse {
  public BulkDeploymentMetrics $bulk_deployment_metrics;
  public BulkDeploymentStatus $bulk_deployment_status;
  public __string $created_at;
  public ErrorDetails $error_details;
  public __string $error_message;
  public Tags $tags;
}

class GetConnectivityInfoRequest {
  public __string $thing_name;
}

class GetConnectivityInfoResponse {
  public __listOfConnectivityInfo $connectivity_info;
  public __string $message;
}

class GetConnectorDefinitionRequest {
  public __string $connector_definition_id;
}

class GetConnectorDefinitionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
}

class GetConnectorDefinitionVersionRequest {
  public __string $connector_definition_id;
  public __string $connector_definition_version_id;
  public __string $next_token;
}

class GetConnectorDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public ConnectorDefinitionVersion $definition;
  public __string $id;
  public __string $next_token;
  public __string $version;
}

class GetCoreDefinitionRequest {
  public __string $core_definition_id;
}

class GetCoreDefinitionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
}

class GetCoreDefinitionVersionRequest {
  public __string $core_definition_id;
  public __string $core_definition_version_id;
}

class GetCoreDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public CoreDefinitionVersion $definition;
  public __string $id;
  public __string $next_token;
  public __string $version;
}

class GetDeploymentStatusRequest {
  public __string $deployment_id;
  public __string $group_id;
}

class GetDeploymentStatusResponse {
  public __string $deployment_status;
  public DeploymentType $deployment_type;
  public ErrorDetails $error_details;
  public __string $error_message;
  public __string $updated_at;
}

class GetDeviceDefinitionRequest {
  public __string $device_definition_id;
}

class GetDeviceDefinitionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
}

class GetDeviceDefinitionVersionRequest {
  public __string $device_definition_id;
  public __string $device_definition_version_id;
  public __string $next_token;
}

class GetDeviceDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public DeviceDefinitionVersion $definition;
  public __string $id;
  public __string $next_token;
  public __string $version;
}

class GetFunctionDefinitionRequest {
  public __string $function_definition_id;
}

class GetFunctionDefinitionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
}

class GetFunctionDefinitionVersionRequest {
  public __string $function_definition_id;
  public __string $function_definition_version_id;
  public __string $next_token;
}

class GetFunctionDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public FunctionDefinitionVersion $definition;
  public __string $id;
  public __string $next_token;
  public __string $version;
}

class GetGroupCertificateAuthorityRequest {
  public __string $certificate_authority_id;
  public __string $group_id;
}

class GetGroupCertificateAuthorityResponse {
  public __string $group_certificate_authority_arn;
  public __string $group_certificate_authority_id;
  public __string $pem_encoded_certificate;
}

class GetGroupCertificateConfigurationRequest {
  public __string $group_id;
}

class GetGroupCertificateConfigurationResponse {
  public __string $certificate_authority_expiry_in_milliseconds;
  public __string $certificate_expiry_in_milliseconds;
  public __string $group_id;
}

class GetGroupRequest {
  public __string $group_id;
}

class GetGroupResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
}

class GetGroupVersionRequest {
  public __string $group_id;
  public __string $group_version_id;
}

class GetGroupVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public GroupVersion $definition;
  public __string $id;
  public __string $version;
}

class GetLoggerDefinitionRequest {
  public __string $logger_definition_id;
}

class GetLoggerDefinitionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
}

class GetLoggerDefinitionVersionRequest {
  public __string $logger_definition_id;
  public __string $logger_definition_version_id;
  public __string $next_token;
}

class GetLoggerDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public LoggerDefinitionVersion $definition;
  public __string $id;
  public __string $version;
}

class GetResourceDefinitionRequest {
  public __string $resource_definition_id;
}

class GetResourceDefinitionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
}

class GetResourceDefinitionVersionRequest {
  public __string $resource_definition_id;
  public __string $resource_definition_version_id;
}

class GetResourceDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public ResourceDefinitionVersion $definition;
  public __string $id;
  public __string $version;
}

class GetServiceRoleForAccountRequest {
}

class GetServiceRoleForAccountResponse {
  public __string $associated_at;
  public __string $role_arn;
}

class GetSubscriptionDefinitionRequest {
  public __string $subscription_definition_id;
}

class GetSubscriptionDefinitionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
}

class GetSubscriptionDefinitionVersionRequest {
  public __string $next_token;
  public __string $subscription_definition_id;
  public __string $subscription_definition_version_id;
}

class GetSubscriptionDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public SubscriptionDefinitionVersion $definition;
  public __string $id;
  public __string $next_token;
  public __string $version;
}

class GroupCertificateAuthorityProperties {
  public __string $group_certificate_authority_arn;
  public __string $group_certificate_authority_id;
}

class GroupCertificateConfiguration {
  public __string $certificate_authority_expiry_in_milliseconds;
  public __string $certificate_expiry_in_milliseconds;
  public __string $group_id;
}

class GroupInformation {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
}

class GroupOwnerSetting {
  public __boolean $auto_add_group_owner;
  public __string $group_owner;
}

class GroupVersion {
  public __string $connector_definition_version_arn;
  public __string $core_definition_version_arn;
  public __string $device_definition_version_arn;
  public __string $function_definition_version_arn;
  public __string $logger_definition_version_arn;
  public __string $resource_definition_version_arn;
  public __string $subscription_definition_version_arn;
}

class InternalServerErrorException {
  public ErrorDetails $error_details;
  public __string $message;
}

class ListBulkDeploymentDetailedReportsRequest {
  public __string $bulk_deployment_id;
  public __string $max_results;
  public __string $next_token;
}

class ListBulkDeploymentDetailedReportsResponse {
  public BulkDeploymentResults $deployments;
  public __string $next_token;
}

class ListBulkDeploymentsRequest {
  public __string $max_results;
  public __string $next_token;
}

class ListBulkDeploymentsResponse {
  public BulkDeployments $bulk_deployments;
  public __string $next_token;
}

class ListConnectorDefinitionVersionsRequest {
  public __string $connector_definition_id;
  public __string $max_results;
  public __string $next_token;
}

class ListConnectorDefinitionVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class ListConnectorDefinitionsRequest {
  public __string $max_results;
  public __string $next_token;
}

class ListConnectorDefinitionsResponse {
  public __listOfDefinitionInformation $definitions;
  public __string $next_token;
}

class ListCoreDefinitionVersionsRequest {
  public __string $core_definition_id;
  public __string $max_results;
  public __string $next_token;
}

class ListCoreDefinitionVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class ListCoreDefinitionsRequest {
  public __string $max_results;
  public __string $next_token;
}

class ListCoreDefinitionsResponse {
  public __listOfDefinitionInformation $definitions;
  public __string $next_token;
}

class ListDefinitionsResponse {
  public __listOfDefinitionInformation $definitions;
  public __string $next_token;
}

class ListDeploymentsRequest {
  public __string $group_id;
  public __string $max_results;
  public __string $next_token;
}

class ListDeploymentsResponse {
  public Deployments $deployments;
  public __string $next_token;
}

class ListDeviceDefinitionVersionsRequest {
  public __string $device_definition_id;
  public __string $max_results;
  public __string $next_token;
}

class ListDeviceDefinitionVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class ListDeviceDefinitionsRequest {
  public __string $max_results;
  public __string $next_token;
}

class ListDeviceDefinitionsResponse {
  public __listOfDefinitionInformation $definitions;
  public __string $next_token;
}

class ListFunctionDefinitionVersionsRequest {
  public __string $function_definition_id;
  public __string $max_results;
  public __string $next_token;
}

class ListFunctionDefinitionVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class ListFunctionDefinitionsRequest {
  public __string $max_results;
  public __string $next_token;
}

class ListFunctionDefinitionsResponse {
  public __listOfDefinitionInformation $definitions;
  public __string $next_token;
}

class ListGroupCertificateAuthoritiesRequest {
  public __string $group_id;
}

class ListGroupCertificateAuthoritiesResponse {
  public __listOfGroupCertificateAuthorityProperties $group_certificate_authorities;
}

class ListGroupVersionsRequest {
  public __string $group_id;
  public __string $max_results;
  public __string $next_token;
}

class ListGroupVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class ListGroupsRequest {
  public __string $max_results;
  public __string $next_token;
}

class ListGroupsResponse {
  public __listOfGroupInformation $groups;
  public __string $next_token;
}

class ListLoggerDefinitionVersionsRequest {
  public __string $logger_definition_id;
  public __string $max_results;
  public __string $next_token;
}

class ListLoggerDefinitionVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class ListLoggerDefinitionsRequest {
  public __string $max_results;
  public __string $next_token;
}

class ListLoggerDefinitionsResponse {
  public __listOfDefinitionInformation $definitions;
  public __string $next_token;
}

class ListResourceDefinitionVersionsRequest {
  public __string $max_results;
  public __string $next_token;
  public __string $resource_definition_id;
}

class ListResourceDefinitionVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class ListResourceDefinitionsRequest {
  public __string $max_results;
  public __string $next_token;
}

class ListResourceDefinitionsResponse {
  public __listOfDefinitionInformation $definitions;
  public __string $next_token;
}

class ListSubscriptionDefinitionVersionsRequest {
  public __string $max_results;
  public __string $next_token;
  public __string $subscription_definition_id;
}

class ListSubscriptionDefinitionVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class ListSubscriptionDefinitionsRequest {
  public __string $max_results;
  public __string $next_token;
}

class ListSubscriptionDefinitionsResponse {
  public __listOfDefinitionInformation $definitions;
  public __string $next_token;
}

class ListTagsForResourceRequest {
  public __string $resource_arn;
}

class ListTagsForResourceResponse {
  public Tags $tags;
}

class ListVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class LocalDeviceResourceData {
  public GroupOwnerSetting $group_owner_setting;
  public __string $source_path;
}

class LocalVolumeResourceData {
  public __string $destination_path;
  public GroupOwnerSetting $group_owner_setting;
  public __string $source_path;
}

class Logger {
  public LoggerComponent $component;
  public __string $id;
  public LoggerLevel $level;
  public __integer $space;
  public LoggerType $type;
}

class LoggerComponent {
}

class LoggerDefinitionVersion {
  public __listOfLogger $loggers;
}

class LoggerLevel {
}

class LoggerType {
}

class Permission {
}

class ResetDeploymentsRequest {
  public __string $amzn_client_token;
  public __boolean $force;
  public __string $group_id;
}

class ResetDeploymentsResponse {
  public __string $deployment_arn;
  public __string $deployment_id;
}

class Resource {
  public __string $id;
  public __string $name;
  public ResourceDataContainer $resource_data_container;
}

class ResourceAccessPolicy {
  public Permission $permission;
  public __string $resource_id;
}

class ResourceDataContainer {
  public LocalDeviceResourceData $local_device_resource_data;
  public LocalVolumeResourceData $local_volume_resource_data;
  public S3MachineLearningModelResourceData $s_3_machine_learning_model_resource_data;
  public SageMakerMachineLearningModelResourceData $sage_maker_machine_learning_model_resource_data;
  public SecretsManagerSecretResourceData $secrets_manager_secret_resource_data;
}

class ResourceDefinitionVersion {
  public __listOfResource $resources;
}

class ResourceDownloadOwnerSetting {
  public __string $group_owner;
  public Permission $group_permission;
}

class S3MachineLearningModelResourceData {
  public __string $destination_path;
  public ResourceDownloadOwnerSetting $owner_setting;
  public __string $s_3_uri;
}

class S3UrlSignerRole {
}

class SageMakerMachineLearningModelResourceData {
  public __string $destination_path;
  public ResourceDownloadOwnerSetting $owner_setting;
  public __string $sage_maker_job_arn;
}

class SecretsManagerSecretResourceData {
  public __string $arn;
  public __listOf__string $additional_staging_labels_to_download;
}

class SoftwareToUpdate {
}

class StartBulkDeploymentRequest {
  public __string $amzn_client_token;
  public __string $execution_role_arn;
  public __string $input_file_uri;
  public Tags $tags;
}

class StartBulkDeploymentResponse {
  public __string $bulk_deployment_arn;
  public __string $bulk_deployment_id;
}

class StopBulkDeploymentRequest {
  public __string $bulk_deployment_id;
}

class StopBulkDeploymentResponse {
}

class Subscription {
  public __string $id;
  public __string $source;
  public __string $subject;
  public __string $target;
}

class SubscriptionDefinitionVersion {
  public __listOfSubscription $subscriptions;
}

class TagResourceRequest {
  public __string $resource_arn;
  public Tags $tags;
}

class Tags {
}

class UntagResourceRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;
}

class UpdateAgentLogLevel {
}

class UpdateConnectivityInfoRequest {
  public __listOfConnectivityInfo $connectivity_info;
  public __string $thing_name;
}

class UpdateConnectivityInfoResponse {
  public __string $message;
  public __string $version;
}

class UpdateConnectorDefinitionRequest {
  public __string $connector_definition_id;
  public __string $name;
}

class UpdateConnectorDefinitionResponse {
}

class UpdateCoreDefinitionRequest {
  public __string $core_definition_id;
  public __string $name;
}

class UpdateCoreDefinitionResponse {
}

class UpdateDeviceDefinitionRequest {
  public __string $device_definition_id;
  public __string $name;
}

class UpdateDeviceDefinitionResponse {
}

class UpdateFunctionDefinitionRequest {
  public __string $function_definition_id;
  public __string $name;
}

class UpdateFunctionDefinitionResponse {
}

class UpdateGroupCertificateConfigurationRequest {
  public __string $certificate_expiry_in_milliseconds;
  public __string $group_id;
}

class UpdateGroupCertificateConfigurationResponse {
  public __string $certificate_authority_expiry_in_milliseconds;
  public __string $certificate_expiry_in_milliseconds;
  public __string $group_id;
}

class UpdateGroupRequest {
  public __string $group_id;
  public __string $name;
}

class UpdateGroupResponse {
}

class UpdateLoggerDefinitionRequest {
  public __string $logger_definition_id;
  public __string $name;
}

class UpdateLoggerDefinitionResponse {
}

class UpdateResourceDefinitionRequest {
  public __string $name;
  public __string $resource_definition_id;
}

class UpdateResourceDefinitionResponse {
}

class UpdateSubscriptionDefinitionRequest {
  public __string $name;
  public __string $subscription_definition_id;
}

class UpdateSubscriptionDefinitionResponse {
}

class UpdateTargets {
}

class UpdateTargetsArchitecture {
}

class UpdateTargetsOperatingSystem {
}

class VersionInformation {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $version;
}

class __boolean {
}

class __double {
}

class __integer {
}

class __listOfConnectivityInfo {
}

class __listOfConnector {
}

class __listOfCore {
}

class __listOfDefinitionInformation {
}

class __listOfDevice {
}

class __listOfFunction {
}

class __listOfGroupCertificateAuthorityProperties {
}

class __listOfGroupInformation {
}

class __listOfLogger {
}

class __listOfResource {
}

class __listOfResourceAccessPolicy {
}

class __listOfSubscription {
}

class __listOfVersionInformation {
}

class __listOf__string {
}

class __long {
}

class __mapOf__string {
}

class __string {
}

class __timestampIso8601 {
}

class __timestampUnix {
}

