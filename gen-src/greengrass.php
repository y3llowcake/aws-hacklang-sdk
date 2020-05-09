<?hh // strict
namespace slack\aws\greengrass;

interface Greengrass {
  public function UpdateLoggerDefinition(UpdateLoggerDefinitionRequest) Awaitable<Errors\Result<UpdateLoggerDefinitionResponse>>;
  public function UpdateResourceDefinition(UpdateResourceDefinitionRequest) Awaitable<Errors\Result<UpdateResourceDefinitionResponse>>;
  public function ListSubscriptionDefinitionVersions(ListSubscriptionDefinitionVersionsRequest) Awaitable<Errors\Result<ListSubscriptionDefinitionVersionsResponse>>;
  public function GetDeploymentStatus(GetDeploymentStatusRequest) Awaitable<Errors\Result<GetDeploymentStatusResponse>>;
  public function UpdateDeviceDefinition(UpdateDeviceDefinitionRequest) Awaitable<Errors\Result<UpdateDeviceDefinitionResponse>>;
  public function CreateLoggerDefinition(CreateLoggerDefinitionRequest) Awaitable<Errors\Result<CreateLoggerDefinitionResponse>>;
  public function ListBulkDeploymentDetailedReports(ListBulkDeploymentDetailedReportsRequest) Awaitable<Errors\Result<ListBulkDeploymentDetailedReportsResponse>>;
  public function DeleteDeviceDefinition(DeleteDeviceDefinitionRequest) Awaitable<Errors\Result<DeleteDeviceDefinitionResponse>>;
  public function CreateFunctionDefinitionVersion(CreateFunctionDefinitionVersionRequest) Awaitable<Errors\Result<CreateFunctionDefinitionVersionResponse>>;
  public function CreateLoggerDefinitionVersion(CreateLoggerDefinitionVersionRequest) Awaitable<Errors\Result<CreateLoggerDefinitionVersionResponse>>;
  public function CreateSubscriptionDefinition(CreateSubscriptionDefinitionRequest) Awaitable<Errors\Result<CreateSubscriptionDefinitionResponse>>;
  public function CreateSubscriptionDefinitionVersion(CreateSubscriptionDefinitionVersionRequest) Awaitable<Errors\Result<CreateSubscriptionDefinitionVersionResponse>>;
  public function DeleteConnectorDefinition(DeleteConnectorDefinitionRequest) Awaitable<Errors\Result<DeleteConnectorDefinitionResponse>>;
  public function DeleteCoreDefinition(DeleteCoreDefinitionRequest) Awaitable<Errors\Result<DeleteCoreDefinitionResponse>>;
  public function ListGroups(ListGroupsRequest) Awaitable<Errors\Result<ListGroupsResponse>>;
  public function AssociateServiceRoleToAccount(AssociateServiceRoleToAccountRequest) Awaitable<Errors\Result<AssociateServiceRoleToAccountResponse>>;
  public function StopBulkDeployment(StopBulkDeploymentRequest) Awaitable<Errors\Result<StopBulkDeploymentResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateConnectivityInfo(UpdateConnectivityInfoRequest) Awaitable<Errors\Result<UpdateConnectivityInfoResponse>>;
  public function UpdateConnectorDefinition(UpdateConnectorDefinitionRequest) Awaitable<Errors\Result<UpdateConnectorDefinitionResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListCoreDefinitionVersions(ListCoreDefinitionVersionsRequest) Awaitable<Errors\Result<ListCoreDefinitionVersionsResponse>>;
  public function ListDeployments(ListDeploymentsRequest) Awaitable<Errors\Result<ListDeploymentsResponse>>;
  public function ListLoggerDefinitionVersions(ListLoggerDefinitionVersionsRequest) Awaitable<Errors\Result<ListLoggerDefinitionVersionsResponse>>;
  public function UpdateFunctionDefinition(UpdateFunctionDefinitionRequest) Awaitable<Errors\Result<UpdateFunctionDefinitionResponse>>;
  public function DeleteLoggerDefinition(DeleteLoggerDefinitionRequest) Awaitable<Errors\Result<DeleteLoggerDefinitionResponse>>;
  public function GetResourceDefinitionVersion(GetResourceDefinitionVersionRequest) Awaitable<Errors\Result<GetResourceDefinitionVersionResponse>>;
  public function ListSubscriptionDefinitions(ListSubscriptionDefinitionsRequest) Awaitable<Errors\Result<ListSubscriptionDefinitionsResponse>>;
  public function UpdateSubscriptionDefinition(UpdateSubscriptionDefinitionRequest) Awaitable<Errors\Result<UpdateSubscriptionDefinitionResponse>>;
  public function CreateResourceDefinition(CreateResourceDefinitionRequest) Awaitable<Errors\Result<CreateResourceDefinitionResponse>>;
  public function GetGroupVersion(GetGroupVersionRequest) Awaitable<Errors\Result<GetGroupVersionResponse>>;
  public function GetLoggerDefinitionVersion(GetLoggerDefinitionVersionRequest) Awaitable<Errors\Result<GetLoggerDefinitionVersionResponse>>;
  public function StartBulkDeployment(StartBulkDeploymentRequest) Awaitable<Errors\Result<StartBulkDeploymentResponse>>;
  public function CreateConnectorDefinitionVersion(CreateConnectorDefinitionVersionRequest) Awaitable<Errors\Result<CreateConnectorDefinitionVersionResponse>>;
  public function ListGroupVersions(ListGroupVersionsRequest) Awaitable<Errors\Result<ListGroupVersionsResponse>>;
  public function ListResourceDefinitionVersions(ListResourceDefinitionVersionsRequest) Awaitable<Errors\Result<ListResourceDefinitionVersionsResponse>>;
  public function CreateDeviceDefinitionVersion(CreateDeviceDefinitionVersionRequest) Awaitable<Errors\Result<CreateDeviceDefinitionVersionResponse>>;
  public function GetCoreDefinitionVersion(GetCoreDefinitionVersionRequest) Awaitable<Errors\Result<GetCoreDefinitionVersionResponse>>;
  public function GetFunctionDefinition(GetFunctionDefinitionRequest) Awaitable<Errors\Result<GetFunctionDefinitionResponse>>;
  public function GetAssociatedRole(GetAssociatedRoleRequest) Awaitable<Errors\Result<GetAssociatedRoleResponse>>;
  public function DeleteFunctionDefinition(DeleteFunctionDefinitionRequest) Awaitable<Errors\Result<DeleteFunctionDefinitionResponse>>;
  public function DeleteResourceDefinition(DeleteResourceDefinitionRequest) Awaitable<Errors\Result<DeleteResourceDefinitionResponse>>;
  public function DisassociateRoleFromGroup(DisassociateRoleFromGroupRequest) Awaitable<Errors\Result<DisassociateRoleFromGroupResponse>>;
  public function GetBulkDeploymentStatus(GetBulkDeploymentStatusRequest) Awaitable<Errors\Result<GetBulkDeploymentStatusResponse>>;
  public function GetGroupCertificateConfiguration(GetGroupCertificateConfigurationRequest) Awaitable<Errors\Result<GetGroupCertificateConfigurationResponse>>;
  public function GetServiceRoleForAccount(GetServiceRoleForAccountRequest) Awaitable<Errors\Result<GetServiceRoleForAccountResponse>>;
  public function ListLoggerDefinitions(ListLoggerDefinitionsRequest) Awaitable<Errors\Result<ListLoggerDefinitionsResponse>>;
  public function CreateResourceDefinitionVersion(CreateResourceDefinitionVersionRequest) Awaitable<Errors\Result<CreateResourceDefinitionVersionResponse>>;
  public function DeleteSubscriptionDefinition(DeleteSubscriptionDefinitionRequest) Awaitable<Errors\Result<DeleteSubscriptionDefinitionResponse>>;
  public function ListBulkDeployments(ListBulkDeploymentsRequest) Awaitable<Errors\Result<ListBulkDeploymentsResponse>>;
  public function ListDeviceDefinitions(ListDeviceDefinitionsRequest) Awaitable<Errors\Result<ListDeviceDefinitionsResponse>>;
  public function ListResourceDefinitions(ListResourceDefinitionsRequest) Awaitable<Errors\Result<ListResourceDefinitionsResponse>>;
  public function CreateGroup(CreateGroupRequest) Awaitable<Errors\Result<CreateGroupResponse>>;
  public function GetDeviceDefinition(GetDeviceDefinitionRequest) Awaitable<Errors\Result<GetDeviceDefinitionResponse>>;
  public function GetDeviceDefinitionVersion(GetDeviceDefinitionVersionRequest) Awaitable<Errors\Result<GetDeviceDefinitionVersionResponse>>;
  public function GetResourceDefinition(GetResourceDefinitionRequest) Awaitable<Errors\Result<GetResourceDefinitionResponse>>;
  public function ListConnectorDefinitions(ListConnectorDefinitionsRequest) Awaitable<Errors\Result<ListConnectorDefinitionsResponse>>;
  public function ListCoreDefinitions(ListCoreDefinitionsRequest) Awaitable<Errors\Result<ListCoreDefinitionsResponse>>;
  public function CreateSoftwareUpdateJob(CreateSoftwareUpdateJobRequest) Awaitable<Errors\Result<CreateSoftwareUpdateJobResponse>>;
  public function GetConnectorDefinition(GetConnectorDefinitionRequest) Awaitable<Errors\Result<GetConnectorDefinitionResponse>>;
  public function GetConnectorDefinitionVersion(GetConnectorDefinitionVersionRequest) Awaitable<Errors\Result<GetConnectorDefinitionVersionResponse>>;
  public function GetFunctionDefinitionVersion(GetFunctionDefinitionVersionRequest) Awaitable<Errors\Result<GetFunctionDefinitionVersionResponse>>;
  public function GetLoggerDefinition(GetLoggerDefinitionRequest) Awaitable<Errors\Result<GetLoggerDefinitionResponse>>;
  public function GetSubscriptionDefinition(GetSubscriptionDefinitionRequest) Awaitable<Errors\Result<GetSubscriptionDefinitionResponse>>;
  public function GetSubscriptionDefinitionVersion(GetSubscriptionDefinitionVersionRequest) Awaitable<Errors\Result<GetSubscriptionDefinitionVersionResponse>>;
  public function ListConnectorDefinitionVersions(ListConnectorDefinitionVersionsRequest) Awaitable<Errors\Result<ListConnectorDefinitionVersionsResponse>>;
  public function CreateCoreDefinitionVersion(CreateCoreDefinitionVersionRequest) Awaitable<Errors\Result<CreateCoreDefinitionVersionResponse>>;
  public function ListGroupCertificateAuthorities(ListGroupCertificateAuthoritiesRequest) Awaitable<Errors\Result<ListGroupCertificateAuthoritiesResponse>>;
  public function ResetDeployments(ResetDeploymentsRequest) Awaitable<Errors\Result<ResetDeploymentsResponse>>;
  public function UpdateGroup(UpdateGroupRequest) Awaitable<Errors\Result<UpdateGroupResponse>>;
  public function UpdateGroupCertificateConfiguration(UpdateGroupCertificateConfigurationRequest) Awaitable<Errors\Result<UpdateGroupCertificateConfigurationResponse>>;
  public function ListDeviceDefinitionVersions(ListDeviceDefinitionVersionsRequest) Awaitable<Errors\Result<ListDeviceDefinitionVersionsResponse>>;
  public function CreateDeployment(CreateDeploymentRequest) Awaitable<Errors\Result<CreateDeploymentResponse>>;
  public function CreateGroupVersion(CreateGroupVersionRequest) Awaitable<Errors\Result<CreateGroupVersionResponse>>;
  public function DeleteGroup(DeleteGroupRequest) Awaitable<Errors\Result<DeleteGroupResponse>>;
  public function DisassociateServiceRoleFromAccount(DisassociateServiceRoleFromAccountRequest) Awaitable<Errors\Result<DisassociateServiceRoleFromAccountResponse>>;
  public function GetGroup(GetGroupRequest) Awaitable<Errors\Result<GetGroupResponse>>;
  public function ListFunctionDefinitionVersions(ListFunctionDefinitionVersionsRequest) Awaitable<Errors\Result<ListFunctionDefinitionVersionsResponse>>;
  public function ListFunctionDefinitions(ListFunctionDefinitionsRequest) Awaitable<Errors\Result<ListFunctionDefinitionsResponse>>;
  public function CreateConnectorDefinition(CreateConnectorDefinitionRequest) Awaitable<Errors\Result<CreateConnectorDefinitionResponse>>;
  public function UpdateCoreDefinition(UpdateCoreDefinitionRequest) Awaitable<Errors\Result<UpdateCoreDefinitionResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function CreateDeviceDefinition(CreateDeviceDefinitionRequest) Awaitable<Errors\Result<CreateDeviceDefinitionResponse>>;
  public function GetConnectivityInfo(GetConnectivityInfoRequest) Awaitable<Errors\Result<GetConnectivityInfoResponse>>;
  public function GetGroupCertificateAuthority(GetGroupCertificateAuthorityRequest) Awaitable<Errors\Result<GetGroupCertificateAuthorityResponse>>;
  public function AssociateRoleToGroup(AssociateRoleToGroupRequest) Awaitable<Errors\Result<AssociateRoleToGroupResponse>>;
  public function CreateFunctionDefinition(CreateFunctionDefinitionRequest) Awaitable<Errors\Result<CreateFunctionDefinitionResponse>>;
  public function CreateGroupCertificateAuthority(CreateGroupCertificateAuthorityRequest) Awaitable<Errors\Result<CreateGroupCertificateAuthorityResponse>>;
  public function GetCoreDefinition(GetCoreDefinitionRequest) Awaitable<Errors\Result<GetCoreDefinitionResponse>>;
  public function CreateCoreDefinition(CreateCoreDefinitionRequest) Awaitable<Errors\Result<CreateCoreDefinitionResponse>>;
}

class GetGroupVersionRequest {
  public __string $group_id;
  public __string $group_version_id;
}

class GetLoggerDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public LoggerDefinitionVersion $definition;
  public __string $id;
  public __string $version;
}

class ListCoreDefinitionVersionsRequest {
  public __string $core_definition_id;
  public __string $max_results;
  public __string $next_token;
}

class CreateResourceDefinitionVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $version;
}

class DeleteConnectorDefinitionRequest {
  public __string $connector_definition_id;
}

class GetLoggerDefinitionVersionRequest {
  public __string $logger_definition_version_id;
  public __string $next_token;
  public __string $logger_definition_id;
}

class CreateLoggerDefinitionVersionResponse {
  public __string $id;
  public __string $version;
  public __string $arn;
  public __string $creation_timestamp;
}

class DeleteResourceDefinitionResponse {
}

class ListDeviceDefinitionsRequest {
  public __string $max_results;
  public __string $next_token;
}

class __mapOf__string {
}

class AssociateRoleToGroupResponse {
  public __string $associated_at;
}

class DeleteResourceDefinitionRequest {
  public __string $resource_definition_id;
}

class DeleteSubscriptionDefinitionResponse {
}

class ListDeploymentsRequest {
  public __string $group_id;
  public __string $max_results;
  public __string $next_token;
}

class UpdateConnectivityInfoRequest {
  public __listOfConnectivityInfo $connectivity_info;
  public __string $thing_name;
}

class __long {
}

class CreateFunctionDefinitionRequest {
  public __string $name;
  public Tags $tags;
  public __string $amzn_client_token;
  public FunctionDefinitionVersion $initial_version;
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

class Resource {
  public ResourceDataContainer $resource_data_container;
  public __string $id;
  public __string $name;
}

class __string {
}

class FunctionDefinitionVersion {
  public __listOfFunction $functions;
  public FunctionDefaultConfig $default_config;
}

class FunctionIsolationMode {
}

class GetGroupRequest {
  public __string $group_id;
}

class GetResourceDefinitionResponse {
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
  public __string $arn;
}

class GroupCertificateConfiguration {
  public __string $certificate_authority_expiry_in_milliseconds;
  public __string $certificate_expiry_in_milliseconds;
  public __string $group_id;
}

class __listOfSubscription {
}

class Function {
  public FunctionConfiguration $function_configuration;
  public __string $id;
  public __string $function_arn;
}

class UpdateFunctionDefinitionResponse {
}

class UpdateGroupRequest {
  public __string $name;
  public __string $group_id;
}

class CreateCoreDefinitionVersionRequest {
  public __string $core_definition_id;
  public __listOfCore $cores;
  public __string $amzn_client_token;
}

class ListGroupsRequest {
  public __string $max_results;
  public __string $next_token;
}

class ListResourceDefinitionVersionsRequest {
  public __string $max_results;
  public __string $next_token;
  public __string $resource_definition_id;
}

class SecretsManagerSecretResourceData {
  public __string $arn;
  public __listOf__string $additional_staging_labels_to_download;
}

class CreateConnectorDefinitionVersionRequest {
  public __string $amzn_client_token;
  public __string $connector_definition_id;
  public __listOfConnector $connectors;
}

class GetBulkDeploymentStatusResponse {
  public BulkDeploymentMetrics $bulk_deployment_metrics;
  public BulkDeploymentStatus $bulk_deployment_status;
  public __string $created_at;
  public ErrorDetails $error_details;
  public __string $error_message;
  public Tags $tags;
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

class Permission {
}

class ResetDeploymentsResponse {
  public __string $deployment_arn;
  public __string $deployment_id;
}

class ResourceDefinitionVersion {
  public __listOfResource $resources;
}

class CreateSoftwareUpdateJobRequest {
  public UpdateTargetsOperatingSystem $update_targets_operating_system;
  public __string $amzn_client_token;
  public S3UrlSignerRole $s_3_url_signer_role;
  public SoftwareToUpdate $software_to_update;
  public UpdateAgentLogLevel $update_agent_log_level;
  public UpdateTargets $update_targets;
  public UpdateTargetsArchitecture $update_targets_architecture;
}

class ListCoreDefinitionsResponse {
  public __listOfDefinitionInformation $definitions;
  public __string $next_token;
}

class ListTagsForResourceRequest {
  public __string $resource_arn;
}

class SubscriptionDefinitionVersion {
  public __listOfSubscription $subscriptions;
}

class __listOfDefinitionInformation {
}

class BadRequestException {
  public ErrorDetails $error_details;
  public __string $message;
}

class CreateDeploymentRequest {
  public __string $group_id;
  public __string $group_version_id;
  public __string $amzn_client_token;
  public __string $deployment_id;
  public DeploymentType $deployment_type;
}

class DeleteSubscriptionDefinitionRequest {
  public __string $subscription_definition_id;
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

class ListGroupVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class TagResourceRequest {
  public Tags $tags;
  public __string $resource_arn;
}

class CreateGroupCertificateAuthorityRequest {
  public __string $group_id;
  public __string $amzn_client_token;
}

class DeleteLoggerDefinitionResponse {
}

class GetConnectivityInfoResponse {
  public __listOfConnectivityInfo $connectivity_info;
  public __string $message;
}

class ListSubscriptionDefinitionVersionsRequest {
  public __string $max_results;
  public __string $next_token;
  public __string $subscription_definition_id;
}

class GetResourceDefinitionVersionResponse {
  public __string $version;
  public __string $arn;
  public __string $creation_timestamp;
  public ResourceDefinitionVersion $definition;
  public __string $id;
}

class GetSubscriptionDefinitionResponse {
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
}

class ListLoggerDefinitionVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class UpdateSubscriptionDefinitionRequest {
  public __string $name;
  public __string $subscription_definition_id;
}

class __timestampIso8601 {
}

class CreateSubscriptionDefinitionVersionResponse {
  public __string $id;
  public __string $version;
  public __string $arn;
  public __string $creation_timestamp;
}

class DeviceDefinitionVersion {
  public __listOfDevice $devices;
}

class ListSubscriptionDefinitionVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class UpdateResourceDefinitionRequest {
  public __string $name;
  public __string $resource_definition_id;
}

class UpdateTargetsArchitecture {
}

class DeleteFunctionDefinitionRequest {
  public __string $function_definition_id;
}

class GetCoreDefinitionResponse {
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
  public __string $arn;
}

class ListConnectorDefinitionsRequest {
  public __string $max_results;
  public __string $next_token;
}

class ListVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class LoggerComponent {
}

class __listOfResourceAccessPolicy {
}

class CreateFunctionDefinitionVersionRequest {
  public __string $function_definition_id;
  public __listOfFunction $functions;
  public __string $amzn_client_token;
  public FunctionDefaultConfig $default_config;
}

class CreateLoggerDefinitionRequest {
  public __string $amzn_client_token;
  public LoggerDefinitionVersion $initial_version;
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

class GetCoreDefinitionVersionRequest {
  public __string $core_definition_id;
  public __string $core_definition_version_id;
}

class ResetDeploymentsRequest {
  public __string $amzn_client_token;
  public __boolean $force;
  public __string $group_id;
}

class SageMakerMachineLearningModelResourceData {
  public __string $destination_path;
  public ResourceDownloadOwnerSetting $owner_setting;
  public __string $sage_maker_job_arn;
}

class __listOfDevice {
}

class BulkDeploymentMetrics {
  public __integer $retry_attempts;
  public __integer $invalid_input_records;
  public __integer $records_processed;
}

class CreateLoggerDefinitionVersionRequest {
  public __string $amzn_client_token;
  public __string $logger_definition_id;
  public __listOfLogger $loggers;
}

class DisassociateRoleFromGroupRequest {
  public __string $group_id;
}

class Empty {
}

class GetServiceRoleForAccountResponse {
  public __string $associated_at;
  public __string $role_arn;
}

class UntagResourceRequest {
  public __string $resource_arn;
  public __listOf__string $tag_keys;
}

class BulkDeploymentStatus {
}

class UpdateCoreDefinitionResponse {
}

class ListResourceDefinitionsResponse {
  public __listOfDefinitionInformation $definitions;
  public __string $next_token;
}

class __double {
}

class CoreDefinitionVersion {
  public __listOfCore $cores;
}

class GroupOwnerSetting {
  public __boolean $auto_add_group_owner;
  public __string $group_owner;
}

class ListResourceDefinitionVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class S3MachineLearningModelResourceData {
  public __string $destination_path;
  public ResourceDownloadOwnerSetting $owner_setting;
  public __string $s_3_uri;
}

class UpdateGroupCertificateConfigurationResponse {
  public __string $group_id;
  public __string $certificate_authority_expiry_in_milliseconds;
  public __string $certificate_expiry_in_milliseconds;
}

class AssociateServiceRoleToAccountResponse {
  public __string $associated_at;
}

class GetGroupCertificateConfigurationRequest {
  public __string $group_id;
}

class InternalServerErrorException {
  public ErrorDetails $error_details;
  public __string $message;
}

class ListConnectorDefinitionsResponse {
  public __string $next_token;
  public __listOfDefinitionInformation $definitions;
}

class StopBulkDeploymentResponse {
}

class BulkDeployments {
}

class CreateGroupRequest {
  public __string $amzn_client_token;
  public GroupVersion $initial_version;
  public __string $name;
  public Tags $tags;
}

class LocalDeviceResourceData {
  public __string $source_path;
  public GroupOwnerSetting $group_owner_setting;
}

class UpdateTargets {
}

class __listOfVersionInformation {
}

class CreateSubscriptionDefinitionVersionRequest {
  public __string $subscription_definition_id;
  public __listOfSubscription $subscriptions;
  public __string $amzn_client_token;
}

class GetCoreDefinitionVersionResponse {
  public CoreDefinitionVersion $definition;
  public __string $id;
  public __string $next_token;
  public __string $version;
  public __string $arn;
  public __string $creation_timestamp;
}

class GetFunctionDefinitionVersionRequest {
  public __string $function_definition_id;
  public __string $function_definition_version_id;
  public __string $next_token;
}

class ResourceDownloadOwnerSetting {
  public __string $group_owner;
  public Permission $group_permission;
}

class ListConnectorDefinitionVersionsRequest {
  public __string $connector_definition_id;
  public __string $max_results;
  public __string $next_token;
}

class ListDefinitionsResponse {
  public __listOfDefinitionInformation $definitions;
  public __string $next_token;
}

class ListFunctionDefinitionVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class __listOfFunction {
}

class CreateDeploymentResponse {
  public __string $deployment_id;
  public __string $deployment_arn;
}

class DeleteCoreDefinitionResponse {
}

class DeleteGroupResponse {
}

class EncodingType {
}

class GetConnectivityInfoRequest {
  public __string $thing_name;
}

class GetDeviceDefinitionVersionResponse {
  public __string $creation_timestamp;
  public DeviceDefinitionVersion $definition;
  public __string $id;
  public __string $next_token;
  public __string $version;
  public __string $arn;
}

class FunctionDefaultExecutionConfig {
  public FunctionIsolationMode $isolation_mode;
  public FunctionRunAsConfig $run_as;
}

class GetGroupCertificateAuthorityResponse {
  public __string $group_certificate_authority_arn;
  public __string $group_certificate_authority_id;
  public __string $pem_encoded_certificate;
}

class UpdateDeviceDefinitionRequest {
  public __string $device_definition_id;
  public __string $name;
}

class FunctionConfigurationEnvironment {
  public __listOfResourceAccessPolicy $resource_access_policies;
  public __mapOf__string $variables;
  public __boolean $access_sysfs;
  public FunctionExecutionConfig $execution;
}

class GetConnectorDefinitionResponse {
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
}

class GetDeviceDefinitionVersionRequest {
  public __string $device_definition_id;
  public __string $device_definition_version_id;
  public __string $next_token;
}

class ListTagsForResourceResponse {
  public Tags $tags;
}

class ResourceDataContainer {
  public LocalVolumeResourceData $local_volume_resource_data;
  public S3MachineLearningModelResourceData $s_3_machine_learning_model_resource_data;
  public SageMakerMachineLearningModelResourceData $sage_maker_machine_learning_model_resource_data;
  public SecretsManagerSecretResourceData $secrets_manager_secret_resource_data;
  public LocalDeviceResourceData $local_device_resource_data;
}

class Tags {
}

class UpdateLoggerDefinitionResponse {
}

class CreateFunctionDefinitionVersionResponse {
  public __string $id;
  public __string $version;
  public __string $arn;
  public __string $creation_timestamp;
}

class CreateSubscriptionDefinitionRequest {
  public __string $amzn_client_token;
  public SubscriptionDefinitionVersion $initial_version;
  public __string $name;
  public Tags $tags;
}

class UpdateCoreDefinitionRequest {
  public __string $core_definition_id;
  public __string $name;
}

class __listOfConnectivityInfo {
}

class ListDeploymentsResponse {
  public Deployments $deployments;
  public __string $next_token;
}

class LoggerType {
}

class CreateGroupCertificateAuthorityResponse {
  public __string $group_certificate_authority_arn;
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

class ListConnectorDefinitionVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class ListDeviceDefinitionVersionsRequest {
  public __string $max_results;
  public __string $next_token;
  public __string $device_definition_id;
}

class ListFunctionDefinitionsResponse {
  public __listOfDefinitionInformation $definitions;
  public __string $next_token;
}

class FunctionRunAsConfig {
  public __integer $gid;
  public __integer $uid;
}

class GetGroupVersionResponse {
  public __string $version;
  public __string $arn;
  public __string $creation_timestamp;
  public GroupVersion $definition;
  public __string $id;
}

class GetSubscriptionDefinitionVersionResponse {
  public __string $creation_timestamp;
  public SubscriptionDefinitionVersion $definition;
  public __string $id;
  public __string $next_token;
  public __string $version;
  public __string $arn;
}

class LoggerLevel {
}

class Connector {
  public __string $connector_arn;
  public __string $id;
  public __mapOf__string $parameters;
}

class CreateDeviceDefinitionVersionRequest {
  public __string $device_definition_id;
  public __listOfDevice $devices;
  public __string $amzn_client_token;
}

class DisassociateServiceRoleFromAccountRequest {
}

class ListCoreDefinitionVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class Subscription {
  public __string $id;
  public __string $source;
  public __string $subject;
  public __string $target;
}

class UpdateDeviceDefinitionResponse {
}

class GetCoreDefinitionRequest {
  public __string $core_definition_id;
}

class CreateLoggerDefinitionResponse {
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public __string $arn;
  public __string $creation_timestamp;
}

class DeleteConnectorDefinitionResponse {
}

class DisassociateRoleFromGroupResponse {
  public __string $disassociated_at;
}

class GeneralError {
  public ErrorDetails $error_details;
  public __string $message;
}

class GetLoggerDefinitionResponse {
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
  public __string $arn;
  public __string $creation_timestamp;
}

class GroupCertificateAuthorityProperties {
  public __string $group_certificate_authority_arn;
  public __string $group_certificate_authority_id;
}

class UpdateConnectorDefinitionRequest {
  public __string $connector_definition_id;
  public __string $name;
}

class DisassociateServiceRoleFromAccountResponse {
  public __string $disassociated_at;
}

class GetLoggerDefinitionRequest {
  public __string $logger_definition_id;
}

class GetResourceDefinitionVersionRequest {
  public __string $resource_definition_id;
  public __string $resource_definition_version_id;
}

class UpdateLoggerDefinitionRequest {
  public __string $name;
  public __string $logger_definition_id;
}

class CreateGroupVersionRequest {
  public __string $amzn_client_token;
  public __string $connector_definition_version_arn;
  public __string $core_definition_version_arn;
  public __string $group_id;
  public __string $subscription_definition_version_arn;
  public __string $device_definition_version_arn;
  public __string $function_definition_version_arn;
  public __string $logger_definition_version_arn;
  public __string $resource_definition_version_arn;
}

class GetAssociatedRoleResponse {
  public __string $associated_at;
  public __string $role_arn;
}

class GetDeviceDefinitionRequest {
  public __string $device_definition_id;
}

class CreateDeviceDefinitionResponse {
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
}

class CreateSoftwareUpdateJobResponse {
  public __string $iot_job_arn;
  public __string $iot_job_id;
  public __string $platform_software_version;
}

class DeleteDeviceDefinitionRequest {
  public __string $device_definition_id;
}

class DeleteFunctionDefinitionResponse {
}

class FunctionExecutionConfig {
  public FunctionIsolationMode $isolation_mode;
  public FunctionRunAsConfig $run_as;
}

class ListFunctionDefinitionVersionsRequest {
  public __string $function_definition_id;
  public __string $max_results;
  public __string $next_token;
}

class __listOfGroupInformation {
}

class FunctionDefaultConfig {
  public FunctionDefaultExecutionConfig $execution;
}

class GetFunctionDefinitionResponse {
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
  public __string $arn;
  public __string $creation_timestamp;
}

class ListGroupCertificateAuthoritiesResponse {
  public __listOfGroupCertificateAuthorityProperties $group_certificate_authorities;
}

class UpdateTargetsOperatingSystem {
}

class CreateResourceDefinitionVersionRequest {
  public __string $amzn_client_token;
  public __string $resource_definition_id;
  public __listOfResource $resources;
}

class GetConnectorDefinitionVersionRequest {
  public __string $connector_definition_id;
  public __string $connector_definition_version_id;
  public __string $next_token;
}

class ListCoreDefinitionsRequest {
  public __string $max_results;
  public __string $next_token;
}

class GetGroupCertificateConfigurationResponse {
  public __string $certificate_authority_expiry_in_milliseconds;
  public __string $certificate_expiry_in_milliseconds;
  public __string $group_id;
}

class LocalVolumeResourceData {
  public __string $destination_path;
  public GroupOwnerSetting $group_owner_setting;
  public __string $source_path;
}

class __listOfLogger {
}

class GetConnectorDefinitionRequest {
  public __string $connector_definition_id;
}

class StartBulkDeploymentRequest {
  public __string $amzn_client_token;
  public __string $execution_role_arn;
  public __string $input_file_uri;
  public Tags $tags;
}

class __listOfGroupCertificateAuthorityProperties {
}

class __listOfResource {
}

class AssociateServiceRoleToAccountRequest {
  public __string $role_arn;
}

class Deployment {
  public __string $created_at;
  public __string $deployment_arn;
  public __string $deployment_id;
  public DeploymentType $deployment_type;
  public __string $group_arn;
}

class GetGroupResponse {
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
}

class CreateResourceDefinitionRequest {
  public Tags $tags;
  public __string $amzn_client_token;
  public ResourceDefinitionVersion $initial_version;
  public __string $name;
}

class ListLoggerDefinitionsResponse {
  public __string $next_token;
  public __listOfDefinitionInformation $definitions;
}

class UpdateSubscriptionDefinitionResponse {
}

class Deployments {
}

class ListDeviceDefinitionsResponse {
  public __listOfDefinitionInformation $definitions;
  public __string $next_token;
}

class ConnectivityInfo {
  public __integer $port_number;
  public __string $host_address;
  public __string $id;
  public __string $metadata;
}

class DeleteDeviceDefinitionResponse {
}

class DeleteLoggerDefinitionRequest {
  public __string $logger_definition_id;
}

class DeploymentType {
}

class Device {
  public __string $certificate_arn;
  public __string $id;
  public __boolean $sync_shadow;
  public __string $thing_arn;
}

class ListBulkDeploymentDetailedReportsRequest {
  public __string $next_token;
  public __string $bulk_deployment_id;
  public __string $max_results;
}

class __boolean {
}

class ListBulkDeploymentDetailedReportsResponse {
  public BulkDeploymentResults $deployments;
  public __string $next_token;
}

class ListSubscriptionDefinitionsResponse {
  public __listOfDefinitionInformation $definitions;
  public __string $next_token;
}

class __listOf__string {
}

class CreateDeviceDefinitionRequest {
  public __string $amzn_client_token;
  public DeviceDefinitionVersion $initial_version;
  public __string $name;
  public Tags $tags;
}

class ListBulkDeploymentsResponse {
  public BulkDeployments $bulk_deployments;
  public __string $next_token;
}

class ListLoggerDefinitionsRequest {
  public __string $max_results;
  public __string $next_token;
}

class SoftwareToUpdate {
}

class BulkDeploymentResult {
  public __string $error_message;
  public __string $group_arn;
  public __string $created_at;
  public __string $deployment_arn;
  public __string $deployment_id;
  public __string $deployment_status;
  public DeploymentType $deployment_type;
  public ErrorDetails $error_details;
}

class DeleteGroupRequest {
  public __string $group_id;
}

class GetConnectorDefinitionVersionResponse {
  public __string $creation_timestamp;
  public ConnectorDefinitionVersion $definition;
  public __string $id;
  public __string $next_token;
  public __string $version;
  public __string $arn;
}

class UpdateResourceDefinitionResponse {
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

class ErrorDetails {
}

class GetBulkDeploymentStatusRequest {
  public __string $bulk_deployment_id;
}

class BulkDeploymentResults {
}

class Core {
  public __string $certificate_arn;
  public __string $id;
  public __boolean $sync_shadow;
  public __string $thing_arn;
}

class CreateConnectorDefinitionRequest {
  public Tags $tags;
  public __string $amzn_client_token;
  public ConnectorDefinitionVersion $initial_version;
  public __string $name;
}

class GetAssociatedRoleRequest {
  public __string $group_id;
}

class GetSubscriptionDefinitionRequest {
  public __string $subscription_definition_id;
}

class ListLoggerDefinitionVersionsRequest {
  public __string $logger_definition_id;
  public __string $max_results;
  public __string $next_token;
}

class UpdateConnectorDefinitionResponse {
}

class UpdateFunctionDefinitionRequest {
  public __string $function_definition_id;
  public __string $name;
}

class ConnectorDefinitionVersion {
  public __listOfConnector $connectors;
}

class CreateGroupVersionResponse {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $version;
}

class GetServiceRoleForAccountRequest {
}

class GetSubscriptionDefinitionVersionRequest {
  public __string $next_token;
  public __string $subscription_definition_id;
  public __string $subscription_definition_version_id;
}

class ListBulkDeploymentsRequest {
  public __string $next_token;
  public __string $max_results;
}

class ListSubscriptionDefinitionsRequest {
  public __string $max_results;
  public __string $next_token;
}

class S3UrlSignerRole {
}

class CreateCoreDefinitionRequest {
  public CoreDefinitionVersion $initial_version;
  public __string $name;
  public Tags $tags;
  public __string $amzn_client_token;
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

class DefinitionInformation {
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public Tags $tags;
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
}

class ListResourceDefinitionsRequest {
  public __string $max_results;
  public __string $next_token;
}

class UpdateGroupResponse {
}

class UpdateGroupCertificateConfigurationRequest {
  public __string $certificate_expiry_in_milliseconds;
  public __string $group_id;
}

class AssociateRoleToGroupRequest {
  public __string $group_id;
  public __string $role_arn;
}

class BulkDeployment {
  public __string $bulk_deployment_arn;
  public __string $bulk_deployment_id;
  public __string $created_at;
}

class CreateDeviceDefinitionVersionResponse {
  public __string $creation_timestamp;
  public __string $id;
  public __string $version;
  public __string $arn;
}

class ErrorDetail {
  public __string $detailed_error_code;
  public __string $detailed_error_message;
}

class GetFunctionDefinitionVersionResponse {
  public FunctionDefinitionVersion $definition;
  public __string $id;
  public __string $next_token;
  public __string $version;
  public __string $arn;
  public __string $creation_timestamp;
}

class ListFunctionDefinitionsRequest {
  public __string $max_results;
  public __string $next_token;
}

class ListGroupsResponse {
  public __string $next_token;
  public __listOfGroupInformation $groups;
}

class __timestampUnix {
}

class GetDeploymentStatusResponse {
  public ErrorDetails $error_details;
  public __string $error_message;
  public __string $updated_at;
  public __string $deployment_status;
  public DeploymentType $deployment_type;
}

class GetFunctionDefinitionRequest {
  public __string $function_definition_id;
}

class Logger {
  public LoggerType $type;
  public LoggerComponent $component;
  public __string $id;
  public LoggerLevel $level;
  public __integer $space;
}

class CreateConnectorDefinitionResponse {
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public __string $arn;
  public __string $creation_timestamp;
}

class ResourceAccessPolicy {
  public __string $resource_id;
  public Permission $permission;
}

class GetDeploymentStatusRequest {
  public __string $deployment_id;
  public __string $group_id;
}

class GetResourceDefinitionRequest {
  public __string $resource_definition_id;
}

class CreateConnectorDefinitionVersionResponse {
  public __string $version;
  public __string $arn;
  public __string $creation_timestamp;
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

class ListDeviceDefinitionVersionsResponse {
  public __string $next_token;
  public __listOfVersionInformation $versions;
}

class ListGroupCertificateAuthoritiesRequest {
  public __string $group_id;
}

class StopBulkDeploymentRequest {
  public __string $bulk_deployment_id;
}

class UpdateAgentLogLevel {
}

class CreateCoreDefinitionVersionResponse {
  public __string $id;
  public __string $version;
  public __string $arn;
  public __string $creation_timestamp;
}

class DeleteCoreDefinitionRequest {
  public __string $core_definition_id;
}

class LoggerDefinitionVersion {
  public __listOfLogger $loggers;
}

class UpdateConnectivityInfoResponse {
  public __string $message;
  public __string $version;
}

class __listOfConnector {
}

class __listOfCore {
}

class GetGroupCertificateAuthorityRequest {
  public __string $group_id;
  public __string $certificate_authority_id;
}

class ListGroupVersionsRequest {
  public __string $group_id;
  public __string $max_results;
  public __string $next_token;
}

class VersionInformation {
  public __string $arn;
  public __string $creation_timestamp;
  public __string $id;
  public __string $version;
}

class __integer {
}

class CreateCoreDefinitionResponse {
  public __string $id;
  public __string $last_updated_timestamp;
  public __string $latest_version;
  public __string $latest_version_arn;
  public __string $name;
  public __string $arn;
  public __string $creation_timestamp;
}

class StartBulkDeploymentResponse {
  public __string $bulk_deployment_arn;
  public __string $bulk_deployment_id;
}

